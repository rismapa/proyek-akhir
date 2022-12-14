@extends('layouts.main')


@section('content')
    <table class="table">
        <thead>
            <tr>
                <th>NO</th>
                <th>NRP</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Tanggal Lahir</th>
                <th>Tempat Lahir</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <th>{{ $loop->iteration }}</th>
                    <td>{{ $student->code }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->gender == "P" ? "Pria" : "Wanita" }}</td>
                    <td>{{ $student->birth_date }}</td>
                    <td>{{ $student->birth_place }}</td>
                </tr> 
            @endforeach
        </tbody>
    </table>

@endsection