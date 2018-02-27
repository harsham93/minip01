@extends('layouts.default')

@section('content')


    <html>
    <head>
        <style>
            table {
                width:100%;
            }
            table, th, td {
                border: 1px solid black;
                border-collapse: collapse;
            }
            th, td {
                padding: 5px;
                text-align: left;
            }
            table#t01 tr:nth-child(even) {
                background-color: #eee;
            }
            table#t01 tr:nth-child(odd) {
                background-color:#fff;
            }
            table#t01 th {
                background-color: black;
                color: white;
            }
        </style>
    </head>
    <body>

<table id="t01">
    <tr>
        <th>#</th>
        <th>Contact Messages</th>
        <th></th>
    </tr>
    <tr>
        <td>1.</td>
        <td><a href="/bootstrapcard" </a>Hello</td>
        <td><button type="submit" class="btn btn-danger">Delete</button></td>
    </tr>
    <tr>
        <td>2.</td>
        <td><a href="/bootstrapcard" </a>Hi</td>
        <td><button type="submit" class="btn btn-danger">Delete</button></td>
    </tr>
    <tr>
        <td>3.</td>
        <td><a href="/bootstrapcard" </a>Hello</td>
        <td><button type="submit" class="btn btn-danger">Delete</button></td>
    </tr>
</table>

    </body>


    @endsection