@extends('layouts.admin_head')






    @section('change_lecturer_details')
        


        <!-- BEGIN: Main_content -->
        <div class="content-wrapper transition-all duration-150 xl:ltr:ml-[248px] xl:rtl:mr-[248px]" id="content_wrapper">
          <div class="page-content">
            <div id="content_layout">

              <div>


                <div class="flex justify-between flex-wrap items-center mb-6">
                  <h4 class="font-medium lg:text-2xl text-xl capitalize text-slate-900 inline-block ltr:pr-4 rtl:pl-4 mb-4 sm:mb-0 flex space-x-3 rtl:space-x-reverse">Lecturer</h4>
                </div>

                @include('layouts.messages')

                <!-- Main Profile-->
                <div class="space-y-5 profile-page">
                  

                  <!-- profile info-500 -->
                  <div class="grid grid-cols-12 gap-6">


                    <div class="lg:col-span-12 col-span-12">
                      <div class="card h-full">
                        <header class="card-header">
                          <h4 class="card-title">Change Lecturer Details</h4>
                        </header>

                        <div class="card-body p-6">
                          <div class="card-text h-full">
                            
                            <form class="space-y-4" action="/lecturer/admin/change_lecturer_details/{{$lecturers->id}}" method="POST" enctype="multipart/form-data" id="multipleValidation">
                                @csrf
                                @method('PUT')
                                <div class="grid md:grid-cols-2 gap-6">
                              <div class="input-area">
                                  <label for="name" class="form-label">Name:</label>
                                  <div class="relative">
                                    <input id="name" type="text" name="name" class="form-control" placeholder="Name" value="{{$lecturers->name}}" required="required">
                                  </div>
                                </div>

                                <div class="input-area">
                                  <label for="email" class="form-label">Email:</label>
                                  <div class="relative">
                                    <input id="email" type="email" name="email" class="form-control" value="{{$lecturers->email}}" placeholder="Email" required="required">
                                  </div>
                                </div>

                                <div class="input-area">
                                  <label for="school_email" class="form-label">School Email:</label>
                                  <div class="relative">
                                    <input id="school_email" type="email" name="school_email" class="form-control" value="{{$lecturers->school_email}}" placeholder="School Email" required="required">
                                  </div>
                                </div>

                                  <div class="input-area">
                                    <label for="faculty_id" class="form-label">Faculty: <i>{{$lecturers->faculty->faculty_name}}</i></label>
                                        <div class="relative">
                                            <input id="faculty_id" type="text" name="faculty_id" class="form-control" value="{{$lecturers->faculty_id}}" placeholder="Faculty" required="required">
                                          </div>
                                  </div>

                                  <div class="input-area">
                                    <label for="department_id" class="form-label">Department: <i>{{$lecturers->department->department_name}}</i></label>
                                        <div class="relative">
                                            <input id="department_id" type="text" name="department_id" class="form-control" value="{{$lecturers->department_id}}" placeholder="Department" required="required">
                                          </div>
                                  </div>

                                  <div class="input-area">
                                    <label for="session_id" class="form-label">Academic Section: <i>{{$lecturers->section->section}}</i></label>
                                        <div class="relative">
                                            <input id="session_id" type="text" name="section_id" class="form-control" value="{{$lecturers->section_id}}" placeholder="Section" required="required">
                                          </div>
                                      
                                  </div>
                                

                                </div>
                                
                                    <button class="flex justify-center cursor-pointer px-3 min-w-[90px] text-center ml-auto py-2 rounded-[999px] text-white
                                bg-black" onclick="return confirm('Are you sure?')">Update</button>
                                    
                            </form>

                          </div>
                        </div>

                      </div>
                    </div>


                    {{--Lecturer--}}
                    <div class="lg:col-span-12 col-span-12">
                        <div class="card h-full">
                          <header class="card-header">
                            <h4 class="card-title">All Lecturers</h4>
  
                            <a href="{{('/lecturer/admin/add_lecturer')}}">
                            <button class="flex justify-center cursor-pointer px-3 min-w-[90px] text-center ml-auto py-2 rounded-[999px] text-white
                            bg-black">Add</button>
                            </a>
                          </header>
  
                          <div class="card-body p-6">
                            
                            <div class="card">
                              <div class="card-body px-6 pb-6">
                                <div class="overflow-x-auto -mx-6 dashcode-data-table">
                                  <span class=" col-span-8  hidden"></span>
                                  <span class="  col-span-4 hidden"></span>
                                  <div class="inline-block min-w-full align-middle">
                                    <div class="overflow-hidden">
                                      <table class="min-w-full divide-y divide-slate-100 table-fixed dark:divide-slate-700" id="data-table">
                                        <thead class=" border-t border-slate-100 dark:border-slate-800">
                                          <tr>
            
                                            <th scope="col" class=" table-th ">
                                              Id
                                            </th>
            
                                            <th scope="col" class=" table-th ">
                                              Matric No.
                                            </th>
            
                                            <th scope="col" class=" table-th ">
                                              Name
                                            </th>
  
                                            <th scope="col" class=" table-th ">
                                              Position
                                            </th>
            
                                            <th scope="col" class=" table-th ">
                                              picture
                                            </th>
            
                                            <th scope="col" class=" table-th ">
                                              Faculty
                                            </th>
            
                                            <th scope="col" class=" table-th ">
                                              Department
                                            </th>
  
                                            <th scope="col" class=" table-th ">
                                              Section
                                            </th>
  
                                            <th scope="col" class=" table-th ">
                                              School Email
                                            </th>
  
                                            <th scope="col" class=" table-th ">
                                              Phone No.
                                            </th>
  
                                            <th scope="col" class=" table-th ">
                                              Activity
                                            </th>
  
                                            <th scope="col" class=" table-th ">
                                              Added Date
                                            </th>
            
                                            <th scope="col" class=" table-th ">
                                              Status
                                            </th>
            
                                            <th scope="col" class=" table-th ">
                                              Action
                                            </th>
            
                                          </tr>
                                        </thead>
  
                                        @if (count($lecturer) === 0)
                                    <td>
                                       <th colspan="9">
                                          <h5 style="color:red; text-align: center;">No record found</h5>
                                       </td>
                                    </tr>
                                    @else
  
                                        @foreach ($lecturer as $lecturers)
  
                                        <tbody class="bg-white divide-y divide-slate-100 dark:bg-slate-800 dark:divide-slate-700">
            
                                          <tr>
                                            <td class="table-td">{{$lecturers->id}}</td>
                                            <td class="table-td ">{{$lecturers->unique_id}}</td>
                                            <td class="table-td">
                                              <span class="text-sm text-slate-600 dark:text-slate-300 capitalize">{{$lecturers->name}}</span>
                                            </td>
                                            <td class="table-td ">{{$lecturers->position}}</td>
                                            <td class="table-td ">
                                              <img src="{{asset('assets/images/lecturers/' . $lecturers->picture)}}" alt="{{$lecturers->name}}" title="{{$lecturers->name}}" class="object-cover w-full h-full rounded-full">
                                            </td>
                                            <td class="table-td ">
                                              <div>
                                                {{$lecturers->faculty->faculty_name}}
                                              </div>
                                            </td>
                                            <td class="table-td ">{{$lecturers->department->department_name}}</td>
                                            <td class="table-td ">
                                              <div>
                                                {{$lecturers->section->section}}
                                              </div>
                                            </td>
                                            <td class="table-td ">{{$lecturers->school_email}}</td>
                                            <td class="table-td ">{{$lecturers->phone_no}}</td>
                                            <td class="table-td ">{{$lecturers->last_activity}}</td>
                                            <td class="table-td ">{{$lecturers->created_at->diffForHumans()}}</td>
                                            <td class="table-td ">
            
                                              <div class="inline-block px-3 min-w-[90px] text-center mx-auto py-1 rounded-[999px] bg-opacity-25 text-success-500
                                          bg-success-500">
                                                Active
                                              </div>
            
                                            </td>
                                            <td class="table-td ">
                                              <div class="flex space-x-3 rtl:space-x-reverse">
                                                {{-- <button class="action-btn" type="button">
                                                  <iconify-icon icon="heroicons:eye"></iconify-icon>
                                                </button> --}}
                                                <a href="/lecturer/admin/change_lecturer_details/{{$lecturers->id}}">
                                                  <button class="action-btn" type="button">
                                                    <iconify-icon icon="heroicons:pencil-square"></iconify-icon>
                                                  </button></a>
                                                <form action="/lecturer/admin/delete_lecturer/{{$lecturers->id}}" method="POST">
                                                  @csrf
                                                  @method('DELETE')
                                                  <button class="action-btn" title="Delete" onclick="return confirm('Are you sure?')">
                                                <iconify-icon icon="heroicons:trash"></iconify-icon>
                                              </button>
                                                </form>
                                              </div>
                                            </td>
                                          </tr>
            
                                          {{--STOP--}}
            
                                        </tbody>
  
                                        @endforeach
                                        @endif
  
                                      </table>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
  
                          </div>
  
                        </div>
                      </div>
                      {{--Lecturer End--}}
                    
                    
                  </div>
                  <!-- profile info-500 end-->

                </div>

                <!-- Main Profile End-->


              </div>

            </div>
          </div>
        </div>
        <!-- END: Main_content -->


        @endsection
