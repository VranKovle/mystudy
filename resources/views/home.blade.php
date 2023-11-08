@extends('layouts.app')

@section('content')
<div>
<br>

{{-- @foreach (App\Models\User::all() as $pengguna)
    {{$pengguna->name}}<br />
@endforeach --}}

@livewire('info')


        <div class="container">
        <div class="row">
            <div class="card">
              <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs" id="bologna-list" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" href="#description" role="tab" aria-controls="description" aria-selected="true">Peringkat</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link"  href="#history" role="tab" aria-controls="history" aria-selected="false">Tugas</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#deals" role="tab" aria-controls="deals" aria-selected="false">Kalender</a>
                  </li>
                </ul>
              </div>
              <div class="card-body">
                 <div class="tab-content mt-3">
                  <div class="tab-pane active" id="description" role="tabpanel">
                    <p>Peringkat akan ditampilkan disini ( read )</p>
                  </div>

                  <div class="tab-pane" id="history" role="tabpanel" aria-labelledby="history-tab">
                    @livewire('tug')
                  </div>

                  <div class="tab-pane" id="deals" role="tabpanel" aria-labelledby="deals-tab">
                    <h5 class="card-title">Kalender</h5>
                    <iframe src="https://calendar.google.com/calendar/embed?height=300&wkst=1&bgcolor=%23ffffff&ctz=Asia%2FPontianak&showTitle=0&showNav=0&showPrint=0&showTabs=1&showTz=0&showCalendars=0&src=YWRkcmVzc2Jvb2sjY29udGFjdHNAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&src=aWQuaW5kb25lc2lhbiNob2xpZGF5QGdyb3VwLnYuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&color=%2333B679&color=%230B8043" style="" width="300" height="300" frameborder="0" scrolling="no"></iframe>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>




<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
      <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/popper.min.js'></script>
      <script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js'></script>
            <script id="rendered-js" >
      $('#bologna-list a').on('click', function (e) {
        e.preventDefault();
        $(this).tab('show');
      });
      //# sourceURL=pen.js
          </script>

<script>
    /* Set the width of the sidebar to 250px and the left margin of the page content to 250px */
function openNav() {
document.getElementById("mySidebar").style.width = "250px";
}

/* Set the width of the sidebar to 0 and the left margin of the page content to 0 */
function closeNav() {
document.getElementById("mySidebar").style.width = "0";
document.getElementById("main").style.marginLeft = "0";
}
</script>




</div>
@endsection
