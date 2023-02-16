@extends('layout')

@section('content')
           
    
        <form id="forms">
            @csrf
            <div class="card gedf-card col-md-6 mx-auto mt-5">
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a 
                            class="nav-link active" 
                            aria-controls="posts" 
                            aria-selected="true">
                                Freedom Wall
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="posts" role="tabpanel" aria-labelledby="posts-tab">
                            <input type="hidden" id="update_id">
                            <div class="form-group">
                                <input 
                                    class="usernameClass form-control col-md-6 mb-2" 
                                    type="name"
                                    id="username_form" 
                                    name="username" 
                                    placeholder="Username"
                                    value="{{ old('username') }}">
                                    @error('username')
                                        <p class="help bg-danger">{{ $errors->first('username')}}</p>
                                        <span class="line"></span>  
                                    @enderror

                                <textarea 
                                    class="bodyClass form-control"
                                    name="body"
                                    id="body_form" 
                                    rows="3" 
                                    placeholder="What are you thinking?">{{ old('body') }}</textarea>

                                @error('body')
                                    <p class="help bg-danger">{{ $errors->first('body')}}</p>
                                    <span class="line"></span>  
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="btn-toolbar justify-content-between">
                        <div class="btn-group mt-2 pull-right col-lg-12">
                            <button type="submit" id="saveBtn" name="post" class="btn btn-dark">POST</button>
                            
                            <button type="submit" value="" id="editBtn" name="update" class="btn btn-dark">Update</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    

        <div id="content-body">
        
        </div>


   
@endsection

@section('scripts')
    <script>
        $(document).ready(function(){

            $('#editBtn').hide();

            fetchData();
            function fetchData()
            {
                $.ajax({
                    type: "GET",
                    url: "/load_data",
                    dataType: false,
                    success: function (response) {
                        html = '';
                        $.each(response.Fwall, function (key, data) {

                            html += `
                            <div class="card gedf-card col-md-6 mx-auto mb-2">
                                <div class="card-header">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="ml-2">
                                                <div class="h5 m-0" id="username_data">${data.username}</div>
                                            </div>
                                        </div>
                                        <div class="dropdown justify-content-md-end">
                                                <button 
                                                    class="btn btn-link-dark dropdown-toggle" 
                                                    type="button" 
                                                    id="gedf-drop1" 
                                                    data-toggle="dropdown" 
                                                    aria-haspopup="true" 
                                                    aria-expanded="false">
                                                        <i class="fa fa-ellipsis-h"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="gedf-drop1">
                                                    <div class="h6 dropdown-header">Configuration</div>
                                                    <button
                                                        class="dropdown-item"
                                                        style="text-align: center;"
                                                        value="${data.id}"
                                                        onclick="$.edit($(this).val())">
                                                            Edit
                                                    </button>
                                                    
                                                    <button
                                                            type="submit"
                                                            value="${data.id}"
                                                            onclick="$.delete($(this).val())"
                                                            class="btn btn-block">
                                                                Delete
                                                    </button>
                                                </div>
                                            </div>
                                    </div>
                                    
                                </div>
                                <div class="card-body">
                                    <div class="text-muted h7 mb-2"> 
                                        <i class="fa fa-clock-o"></i> ${data.created_at}
                                    </div>

                                    <p class="card-text" id="body_data">${data.body}</p>
                                </div>
                            </div>`
                        });


                        $('#content-body').html(html);
                    }
                });
            }
               
            $('#saveBtn').click(function(e){
                e.preventDefault();

                var username = $('#username_form').val();
                var body = $('#body_form').val();
                
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                  url: "/store",
                  type:"POST",
                  data:{
                    username:username,
                    body:body
                  },
                  success:function(response){
                    
                    $('#username_form').val("");
                    $('#body_form').val("");
                    fetchData();
                  },
                  error: function(response) {
                    
                  }
                });
            });


            $.extend({
                delete : function(id){
                    var delID = id;
                    
                    $.ajax({
                        type: "POST",
                        url: '/'+delID,
                        data: {
                            "_token": "{{ csrf_token() }}",
                            'id':id
                        },
                        success: function(response){
                            fetchData();
                        },
                        error: function(response) {
                            console.log("Failed");
                        }
                    });
                },
            });

            $.extend({
                edit : function(id){
                    var username_data = $('#username_data'+id).text();
                    var body_data = $('#body_data'+id).text();
                    $('#username_form').val(username_data);
                    $('#body_form').val(body_data);
                    $('#editBtn').show();
                    $('#editBtn').val(id); 
                    $('#saveBtn').hide();
                }
            });

            $.extend({
                update : function(id){

                    var username =  $('#username_form').val();

                    // var body = $('#body_form').val();
                    // $.ajax({
                    //     type: "POST",
                    //     url: "/update",
                    //     data: {"_token": "{{ csrf_token() }}",
                    //             id: id,
                    //             username: username,
                    //             body: body   
                    //         },
                    //     success: function(response){
                    //         // console.log("Update Success");
                    //         $('#username_form').val('');
                    //         $('#body_form').val('');
                    //         $('#editBtn').hide();
                    //         $('#saveBtn').show();
                            
                    //         var Fwall = response['Fwall'];

                    //         var insertData =`
                    //             <div class="card gedf-card col-md-6 mx-auto mb-2">
                    //                 <div class="card-header">
                    //                     <div class="d-flex justify-content-between align-items-center">
                    //                         <div class="d-flex justify-content-between align-items-center">
                    //                             <div class="ml-2">
                    //                                 <div class="h5 m-0" id="username_data'${Fwall.id}'">${Fwall.username}</div>
                    //                             </div>
                    //                         </div>
                    //                         <div class="dropdown justify-content-md-end">
                    //                                 <button 
                    //                                     class="btn btn-link-dark dropdown-toggle" 
                    //                                     type="button" 
                    //                                     id="gedf-drop1" 
                    //                                     data-toggle="dropdown" 
                    //                                     aria-haspopup="true" 
                    //                                     aria-expanded="false">
                    //                                         <i class="fa fa-ellipsis-h"></i>
                    //                                 </button>
                    //                                 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="gedf-drop1">
                    //                                     <div class="h6 dropdown-header">Configuration</div>
                    //                                     <a 
                    //                                         class="dropdown-item"
                    //                                         style="text-align: center;"
                    //                                         value="${Fwall.id}"
                    //                                         onclick="$.edit($(this).val())">
                    //                                             Edit
                    //                                     </a>
                                                        
                    //                                     <button
                    //                                             type="submit"
                    //                                             value="${Fwall.id}"
                    //                                             onclick="$.delete($(this).val())"
                    //                                             class="btn btn-block">
                    //                                                 Delete
                    //                                     </button>
                    //                                 </div>
                    //                             </div>
                    //                     </div>
                                        
                    //                 </div>
                    //                 <div class="card-body">
                    //                     <div class="text-muted h7 mb-2"> 
                    //                         <i class="fa fa-clock-o"></i> ${Fwall.created_at}
                    //                     </div>

                    //                     <p class="card-text" id="body_data'${Fwall.id}'">${Fwall.body}</p>
                    //                 </div>
                    //             </div>`;
                    //             $("#content-body").prepend(insertData);

                    //     },
                    //     error: function(response) {
                    //         console.log("Update Failed");
                    //     }
                    // }); 
                },
            });
            

            $("#editBtn").click(function (e) { 
                e.preventDefault();
                $.update($(this).val());
            });
        });
    </script>
@endsection

