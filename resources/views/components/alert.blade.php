@props(['typeone','typetow','typethree'])

<div class=" {{$typeone}} border-l-4 {{$typetow}} p-4 rounded w-8/12" role="alert">
    <p class="font-bold {{$typethree}} "> {{$slot}} </p>
</div>