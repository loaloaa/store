@extends('layouts.admin')
@section('content')
<div class="py-3">
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">اسم المنتج</th>
        <th scope="col">الصنف</th>
        <th scope="col">السعر</th>
        <th scope="col">الكمية </th>
        <th scope="col">الأحداث</th>

      </tr>
    </thead>
    <tbody>
        @for ($products as product)
        <tr>
            <th scope="row">1</th>
            <td>{{$product->name}}</td>
            <td>{{$product->id}}</td>
            
                        <td>{{$product->details}}</td>
                        <td>{{$product->price}}</td>
            <td>
                <a href ="{{url('product/delete/'.$product->id)}}" class="btn btn-danger">حذف</a>
                <a href ="{{url('product/edit/'.$product->id)}}" class="btn btn-info">تعديل</a>

             </td>
          </tr>
        @endfor


    </tbody>
  </table>
</div>

@endsection
