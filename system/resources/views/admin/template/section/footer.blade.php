<footer class="main-footer">
<!-- To the right -->
<div class="float-right d-none d-sm-inline">
  Kreatifitas Tanpa Batas
</div>
<!-- Default to the left -->
<strong>Copyright &copy; 2020 @if(date("Y") > '2020') {{date("Y")}} @endif <a href="https://informatika.ac.id">@if(Auth::check()){{request()->user()->nama}}@endif</a>.</strong> All rights reserved.
</footer>