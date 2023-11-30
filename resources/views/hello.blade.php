<div>
    <!-- Always remember that you are absolutely unique. Just like everyone else. - Margaret Mead -->

  @if ($result <= 33)
  <h1>{{ "You are fail in this exam" }}</h1>
  @elseif ($result >= 33)

  <h1>{{ "You are pass" }}</h1>
  @else
  <h1>{{ "Result Not Found" }}</h1>

  @endif
</div>
