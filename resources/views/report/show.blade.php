@extends('layouts.main')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-6 text-gray-800">Редактирование заявки</h1>

    <form method="POST" action="{{ route('report.update', $report) }}" class="bg-white p-6 rounded-lg shadow-md space-y-4">
        @csrf
        @method('PUT')


        <div>
            <label for="description" class="block text-sm font-medium text-gray-700">Описание заявки</label>
            <textarea
                id="description"
                name="description"
                rows="4"
                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-blue-500 focus:border-blue-500"
                required>{{ isset($report) ? $report->description : '' }}</textarea>
        </div>


        <div class="text-right">
            <button type="submit" class="bg-blue-500 text-white px-6 py-2 rounded-lg hover:bg-blue-600 transition duration-200 ease-in-out">
                Обновить
            </button>
        </div>
    </form>
</div>
@endsection
