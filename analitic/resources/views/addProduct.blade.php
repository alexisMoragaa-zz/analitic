@extends('app')
@section('content')
<!--contenido-->

   <div class="container" id="loadContainer">
     <form class="" action="/load" method="post" enctype="multipart/form-data">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
     <div class="row">

           <div class="col-12  col-lg-8">
             <img src="http://placeimg.com/750/450/tech/8" alt="responsive image" class="img-thumbnail imgViewProduct">
           </div>

           <div class=" col-12 col-lg-4">
             <label for="" class="control-label mt-1">Name Product</label>
             <input type="text" class="form-control" name="name">

             <label for="" class="control-label mt-3">Description</label>
             <textarea name="description" rows="5" cols="30" class="form-control"></textarea>

             <label for="" class="control-label mt-3">Price</label>
             <input type="text" class="form-control" name="price">

             <label for="" class="control-label mt-3">Stock</label>
             <select name="stock" id="" class="form-control">
               <option value="yes">Yes</option>
               <option value="Not">Not</option>
             </select>
           </div>

         </div>
         <div class="row">
           <div class="col-12 col-lg-8 mt-3">
               <label class="custom-file col-12">
                 <input type="file" id="file2" class="custom-file-input" name="image">
                 <span class="custom-file-control"></span>
               </label>
           </div>
           <div class="col-12 col-lg-4 mt-3 ">
             <div class="row">
               <button class="btn btn-outline-danger col-6">Cancel</button>
               <input type="submit" name="" value="Save" class="btn btn-outline-success col-6">
             </div>
           </div>
         </div>
   </form>

 </div>
 <!--navbarSupportedContentido-->
@endsection
