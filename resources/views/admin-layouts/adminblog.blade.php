@extends('layouts.app')
@section('content')
<div class="container mt-5 ms-5 p-5 mb-5" style="background: #eee; width:100%; height:90vh;">


                     <form action="#" method="POST" enctype="multipart/form-data">
                      @include('mail.error')
                        @csrf
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-element"><input type="text" placeholder="Author" name="author" >
                              </div>
                           </div>

                           <div class="col-md-6">
                              <div class="form-element"><input type="text" placeholder="title" name="title">
                              </div>
                              
                           </div>
                           
                           <div class="col-md-6">
                              <div class="form-element"><input type="text" placeholder="description" name="desc"></div>
                               
                           <div class="col-md-6">
                              <div class="form-element"><input type="text" placeholder="categories" name="categories"></div>
                              
                           </div>
                           <div class="col-md-6">
                            <div class="form-element"><input type="file" placeholder="" name="image"></div>
                            
                         </div>
                        
                           <div class="col-md-12">
                              <div class="form-element">
                                 <textarea name="content" cols="30" rows="20" placeholder="Content"></textarea>
                                
                              </div>
                           </div>
                           <div class="col-md-12">
                              <div class="form-element">
                                 <button type="submit" class="btn btn-primary ms-5"><span>Submit</span></button>
                              </div>
                           </div>
                      
                     </form>
                  </div>

</div>
</div>  
   
   </tbody>
 </table>




 
@endsection