@foreach ($quizzes as $quiz)
    {{-- Display quiz details --}}
    <h2>{{ $quiz->title }}</h2>
    <p>{{ $quiz->description }}</p>
    <img src="{{ $quiz->photo }}" alt="Quiz Photo">
@endforeach