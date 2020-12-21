@extends('layouts.admin.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('backend/fullcalendar/lib/main.css') }}">
@endsection

@section('content')
<div class="page-header">
    <h3 class="page-title">
        <span class="page-title-icon bg-gradient-primary text-white mr-2">
            <i class="mdi mdi-arrow-collapse-all"></i>
        </span> Calendrier 
    </h3>
    <nav aria-label="breadcrumb">
        <ul class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Calendrier</li>
        </ul>
    </nav>
</div>

<div class="card card-outline-primary">
    <div class="card-body">
        <div id="calendar"></div>
    </div>
</div>
@endsection

@section('js')
    <script src="{{ asset('backend/fullcalendar/lib/main.js') }}"></script>
    <script>
        window.onload = () => {
            let calendarEl = document.getElementById('calendar')

            let calendar = new FullCalendar.Calendar(calendarEl, {
                themeSystem: 'bootstrap',
                initialView: 'dayGridMonth',
                locale: 'fr',
                timeZone: 'Afrique/Dakar',
                headerToolbar: {
                    start: 'prev,next today',
                    center: 'title',
                    end: 'dayGridMonth,dayGridDay,timeGridWeek,list'
                },
                bootstrapFontAwesome: {
                    close: 'timer',
                    prev: 'chevron-left',
                    next: 'chevron-right',
                    prevYear: 'chevron-double-left',
                    nextYear: 'chevron-double-right',
                },
                events: {!! $data !!}
            })

            calendar.render()
        }
    </script>
@endsection