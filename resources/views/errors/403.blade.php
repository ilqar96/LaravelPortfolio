@extends('backend.app')

@section('title', __('Forbidden'))


<!-- 403 Error Text -->
<div class="text-center" style="height: 100vh;">
    <div style="margin-top:25%;" class="error mx-auto" data-text="403">403</div>
    <p class="lead text-gray-800 mb-5">Forbidden</p>
    <p class="text-gray-500 mb-0">It looks like you found a glitch in the matrix...</p>
    <a href="{{url()->previous()}}">&larr; Back to Previous</a>
</div>
