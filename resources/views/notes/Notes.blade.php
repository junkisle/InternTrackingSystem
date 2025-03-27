<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
    crossorigin="anonymous">
</head>
<body>

     
     <div class="container-fluid">
    <div class="row">
        <a href="{{ route('notes.new') }}" class="btn btn-primary">Add New Note</a>

            <div class="col-md-3 col-xl-2 px-sm-2 px-0 bg-dark min-vh-100 position-fixed" style="height: 100vh;">
                @include('utility.sidebar', ['user_data' => session('user_data')])
            </div>

   
            <div class="col-md-9 col-xl-10 offset-md-3 offset-xl-2 py-3">
                <p class="fw-bold fs-4">WELCOME {{ session('user_data')->name_first }} To Notes</p>
                <!-- CURRENT USER'S ID -->
                @if(session()->has('user_data'))
                    @php
                    
                    $current_user_id = session('user_data')->id
                    
                    
                    @endphp

                @else
                    <p>No user data found</p>
                @endif

                // Manage days
                @foreach($notes as $note)
                    @if($current_user_id == $note->user_id)
                            @php

                                $newestDay = $notes->where('user_id', $current_user_id)->max('day'); // Get the highest day value from the collection
                            
                                $nextDay = $newestDay + 1;

                                $firstDayNote = $notes
                                ->where('user_id', $current_user_id)
                                ->where('day', 1)
                                ->pluck('note')
                                ->first();

                            @endphp
                    @endif
                @endforeach

                <select name="Days" id="days-dropdown">
                    <option value="all">All Days</option>
                    @foreach($notes as $note)
                        @if($current_user_id == $note->user_id)
                            <option value="{{ $note->day }}" {{ $note->day == 1 ? 'selected' : '' }}>{{ $note->day }}</option>
                        @endif
                    @endforeach
                </select>
                
            </div>
                
        
        <div class="col-md-9 col-xl-10 offset-md-3 offset-xl-2 py-3">
            <h1>Notes</h1>
            
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Note</th>
                    </tr>
                </thead>
                <tbody id="notes-table">
                    @foreach($notes as $note)
                        @if($current_user_id == $note->user_id)
                            <tr data-day="{{ $note->day }}" style="{{ $note->day != 1 ? 'display: none;' : '' }}">    
                                <td>{{ $note->note }}</td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
            
    </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            let dropdown = document.getElementById("days-dropdown");
            let selectedDay = dropdown.value; // Get default selected value (Day 1)
            let rows = document.querySelectorAll("#notes-table tr");

            function filterTable(day) {
                rows.forEach(row => {
                    let rowDay = row.getAttribute("data-day");
                    row.style.display = (day === "all" || rowDay === day) ? "" : "none";
                });
            }

            // Filter the table when dropdown changes
            dropdown.addEventListener("change", function() {
                filterTable(this.value);
            });

            // Apply filtering on page load (default to Day 1)
            filterTable(selectedDay);
        });
    </script>
</body>
</html>