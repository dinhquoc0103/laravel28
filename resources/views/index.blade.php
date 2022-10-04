@foreach ($peoples as $people)
    {{ $people->id . ' ' . $people->name }}
@endforeach