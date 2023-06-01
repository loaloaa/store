@extends('layouts.admin')
@section('content')
<div class="py-3">
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">اسم الصنف</th>
        <th scope="col">سعر الصنف</th>
        <th scope="col">الأحداث</th>

      </tr>
    </thead>
    <tbody>
        @foreash ($categories as category)
        <tr>
            <th scope="row">1</th>
            <td>{{$product->name}}</td>
            <td>
                <a href ="{{url('category/delete/'.$category->id)}}" class="btn btn-danger">حذف</a>
                <a href ="{{url('category/edit/'.$category->id)}}" class="btn btn-info">تعديل</a>

             </td>
          </tr>
        @endfor


    </tbody>
  </table>
</div>

@endsection
