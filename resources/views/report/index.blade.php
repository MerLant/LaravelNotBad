@extends('layouts.main')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-6 text-gray-800">Список репортов</h1>

    <!-- Список отчетов -->
    <div class="space-y-4">
        @foreach($reports as $report)
        <div class="bg-white shadow-md rounded-lg p-4 flex justify-between items-center">
            <div>
                <a href="{{ route('report.update', $report) }}" class="text-lg font-semibold text-gray-700 hover:text-blue-600">
                    <p>Отчет #{{$report["number"]}}</p>
                    <p class="text-gray-500">{{$report["description"]}}</p>
                </a>
            </div>
            <div>
                <form method="POST" action="{{route('reports.destroy', $report->id)}}" class="inline-block">
                    @method('delete')
                    @csrf
                    <button type="submit" class="text-red-500 hover:text-red-700 font-semibold">Удалить</button>
                </form>
            </div>
        </div>
        @endforeach
    </div>

    <div class="mt-8">
        <h2 class="text-2xl font-bold mb-4 text-gray-800">Создать репорт</h2>
        <form method="POST" action="{{ route('reports.store') }}" class="bg-white p-6 rounded-lg shadow-md space-y-4">
            @csrf

            <div>
                <label for="description" class="block text-sm font-medium text-gray-700">Описание отчета</label>
                <textarea id="description" name="description" rows="4" class="w-full mt-1 border border-gray-300 rounded-md shadow-sm p-2 focus:ring-blue-500 focus:border-blue-500" placeholder="Введите описание" required></textarea>
            </div>

            <div class="text-right">
                <button type="submit" class="bg-blue-500 text-white px-6 py-2 rounded-lg hover:bg-blue-600 transition duration-200 ease-in-out">
                    Создать
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
