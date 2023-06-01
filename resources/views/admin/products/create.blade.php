@extends('layouts.admin')
@section('content')
<div class="py-3">
    <form action="{{url('products/store1')}}" method="post">
        <div class="mb-3">

            <label for="nameFormControlInput1" class="form-label">اسم المنتج </label>
            <input type="text" class="form-control" id="name" name="name"placeholder="اسم المنتج">
        </div>
        <div class="mb-3">

            <label for="quntityFormControlInput1" class="form-label">الكمية </label>
            <input type="number" class="form-control" id="quntity" name="quntity"placeholder="الكمية ">
        </div>
        <div class="mb-3">

            <label for="priceFormControlInput1" class="form-label">السعر</label>
            <input type="number" class="form-control" id="price" name="price"placeholder"السعر">
        </div>

        <div class="mb-3">
            <label for="discriptionFormControlTextarea1" class="form-label">الوصف</label>
            <textarea class="form-control" id="discription"name="discription" rows="3"></textarea>
        </div>

</div>
<div class="mb-3">
    <label for="quntityFormControlInput1" class="form-label">اختر الصنف</label>

    <select class="form-control" name="category" id="category">
        <option value="#"></option>
        <option value="1">ملابس</option>
        <option value="2">احذية </option>
        <option value="3">اكسسوارات</option>


    </select>

</div>


<div class="mb-3">
    <input type="submit" value="احفظ" class="btn btn-info">


</div>
    </form>
@endsection
