! function(e) {
    "use strict";
    var t = function() {
        this.$body = e("body"), 
        this.$modal = e("#event-modal"), 
        this.$event = "#external-events div.external-event", 
        this.$calendar = e("#calendar"), 
        this.$saveCategoryBtn = e(".save-category"), 
        this.$categoryForm = e("#add-category form"), 
        this.$extEvents = e("#external-events"), 
        this.$calendarObj = null;
        this.events = [];
        this.categories = [];
    };
    
    t.prototype.onDrop = function(t, n) {
        var a = t.data("eventObject"),
            o = t.attr("data-class"),
            i = e.extend({}, a);
        i.start = n, 
        o && (i.className = [o]), 
        this.$calendar.fullCalendar("renderEvent", i, !0), 
        e("#drop-remove").is(":checked") && t.remove();
        this.addEvent(i);
    };
    
    t.prototype.onEventClick = function(t, n, a) {
        var o = this,
            i = e("<form></form>");
        i.append("<label>Change event name</label>"), 
        i.append("<div class='input-group'><input class='form-control' type=text value='" + t.title + "' /><span class='input-group-btn'><button type='submit' class='btn btn-success waves-effect waves-light'><i class='fa fa-check'></i> Save</button></span></div>"), 
        o.$modal.modal({backdrop: "static"}), 
        o.$modal.find(".delete-event").show().end().find(".save-event").hide().end().find(".modal-body").empty().prepend(i).end().find(".delete-event").unbind("click").on("click", function() {
            o.deleteEvent(t._id), 
            o.$calendarObj.fullCalendar("removeEvents", function(e) {
                return e._id == t._id
            }), 
            o.$modal.modal("hide")
        }), 
        o.$modal.find("form").on("submit", function() {
            t.title = i.find("input[type=text]").val(), 
            o.updateEvent(t), 
            o.$calendarObj.fullCalendar("updateEvent", t), 
            o.$modal.modal("hide"), 
            return !1
        })
    };
    
    t.prototype.onSelect = function(t, n, a) {
        var o = this;
        o.$modal.modal({backdrop: "static"});
        var i = e("<form></form>");
        i.append("<div class='row'></div>"), 
        i.find(".row").append("<div class='col-md-6'><div class='form-group'><label class='control-label'>Event Name</label><input class='form-control' placeholder='Insert Event Name' type='text' name='title'/></div></div>").append("<div class='col-md-6'><div class='form-group'><label class='control-label'>Category</label><select class='form-control' name='category'></select></div></div>").find("select[name='category']").append("<option value='bg-danger'>Danger</option>").append("<option value='bg-success'>Success</option>").append("<option value='bg-dark'>Dark</option>").append("<option value='bg-primary'>Primary</option>").append("<option value='bg-pink'>Pink</option>").append("<option value='bg-info'>Info</option>").append("<option value='bg-warning'>Warning</option>"),
        o.$modal.find(".delete-event").hide().end().find(".save-event").show().end().find(".modal-body").empty().prepend(i).end().find(".save-event").unbind("click").on("click", function() {
        var n = i.find("input[name='title']").val(),
        a = (i.find("input[name='beginning']").val(), i.find("input[name='ending']").val(), i.find("select[name='category'] option:checked").val());
        if (n !== "") {
        var r = {
            title: n,
            start: t.formatDate(t.getDate(t.find(".fc-day.selected"))),
            allDay: !0,
            className: a
         };
        o.$calendar.fullCalendar("renderEvent", r, !0),
        o.addEvent(r),
        o.$modal.modal("hide")
        } else
        alert("Title can't be blank. Please try again.")
        }),
        o.$calendar.fullCalendar("unselect")
    };

    t.prototype.addEvent = function(e) {
    this.events.push(e), 
    this.updateDatabase(e, "add")
};

t.prototype.updateEvent = function(e) {
    var id = e._id;
    var title = e.title;
    this.events.forEach(function (event) {
        if (event._id === id) {
            event.title = title;
        }
    });
    this.updateDatabase(e, "update");
};

t.prototype.deleteEvent = function(e) {
    var id = e._id;
    this.events = this.events.filter(function (event) {
        return event._id !== id;
    });
    this.updateDatabase(e, "delete");
};

t.prototype.updateDatabase = function(event, action) {
    var url = '/events';
    var data = {
        id: event._id,
        title: event.title,
        start: event.start.format(),
        end: event.end.format(),
        className: event.className,
        action: action
    };

    $.ajax({
        type: 'POST',
        url: url,
        data: data,
        success: function(data) {
            console.log(data);
        },
        error: function(data) {
            console.log(data);
        }
    });
};

t.prototype.init = function() {
    var t = this;
    var url = '/events';
    $.ajax({
        url: url,
        type: 'GET',
        success: function(response) {
            t.events = response.events;
            t.categories = response.categories;
            t.$calendarObj = t.$calendar.fullCalendar({
                slotDuration: "00:15:00",
                minTime: "08:00:00",
                maxTime: "19:00:00",
                themeSystem: "bootstrap4",
                buttonIcons: {
                    prev: "mdi mdi-chevron-left",
                    next: "mdi mdi-chevron-right"
                },
                header: {
                    left: "prev,next today",
                    center: "title",
                    right: "month,agendaWeek,agendaDay"
                },
                events: t.events,
                editable: !0,
                droppable: !0,
                eventLimit: !0,
                selectable: !0,
                drop: function(e, n) {
                    t.onDrop(e, n)
                },
                select: function(e, n, a) {
                    t.onSelect(e, n, a)
                },
                eventClick: function(e, n, a) {
                    t.onEventClick(e, n, a)
                }
            }), t.$calendarObj.on('eventDrop', function(event, delta, revertFunc) {
                t.updateDatabase(event, "update");
            });
           


    
