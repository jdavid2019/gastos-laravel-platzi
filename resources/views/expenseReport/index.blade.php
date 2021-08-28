@extends('layouts.base')

@section('content')
    <h1 class="ml-2">Expense Reports</h1>
    <table class="table">
        <thead>
        <tr>
            <td>Titulo</td>
        </tr>
        </thead>
        <tbody>
        @foreach($expenseReports as $expenseReport)
            <tr>
                <td>{{ $expenseReport->title }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
