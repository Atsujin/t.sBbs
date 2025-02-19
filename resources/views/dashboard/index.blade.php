@extends('layouts.main')

@section('title', 'ダッシュボード')

@section('content')
<h2>スレッド検索</h2>
<input type="search" name="query" value="{{ $query ?? '' }}">
<button type="submit"><img src="{{ asset('images/search-icon.png') }}" width="20" height="20"></button>
<div class="table-responsive">
  <table>
    <tr>
      <th>スレッド名</th>
      <th>作成日時</th>
      <th>更新日時</th>
    </tr>
    <tr>
      <td>野球</td>
      <td>2021-01-01 12:00:00</td>
      <td>2021-01-01 12:00:00</td>
    </tr>
  </table>
</div>
@endsection