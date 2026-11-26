@props(['title', 'icon' => null])
<div class="ihead">
  <a class="back" href="{{ url()->previous() }}"><svg class="ic" style="transform:scaleX(-1)"><use href="#i-chev"/></svg></a>
  <h1>{{ $title }}</h1>
  @if ($icon)
  <div class="round-btn"><svg class="ic"><use href="#i-{{ $icon }}"/></svg></div>
  @endif
</div>
