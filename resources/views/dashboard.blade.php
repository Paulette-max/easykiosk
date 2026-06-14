@extends('layouts.app')

@section('content')
<main class="dashboard container">
  <h1>Prototype Dashboard</h1>

  <div class="cards">
    <div class="card">Users<br><strong>{{ $summary['users'] }}</strong></div>
    <div class="card">Orders<br><strong>{{ $summary['orders'] }}</strong></div>
    <div class="card">Revenue<br><strong>${{ number_format($summary['revenue'], 2) }}</strong></div>
  </div>

  <h2>Recent Orders</h2>
  <table class="table">
    <thead><tr><th>ID</th><th>Customer</th><th>Total</th></tr></thead>
    <tbody>
      @foreach($recent as $r)
        <tr>
          <td>{{ $r['id'] }}</td>
          <td>{{ $r['customer'] }}</td>
          <td>${{ number_format($r['total'], 2) }}</td>
        </tr>
      @endforeach
    </tbody>
  </table>
</main>
@endsection
