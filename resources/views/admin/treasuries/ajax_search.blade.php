
          @if (@isset($data) && !@empty($data) && count($data) >0 )
          @php
           $i=1;   
          @endphp
          <table id="example2" class="table table-bordered table-hover">
            <thead class="custom_thead">
           <th>مسلسل</th>
           <th>اسم الخزنة</th>
           <th>هل رئيسية</th>
           <th>اخر ايصال صرف</th>
           <th>اخر ايصال تحصيل</th>
           <th>حالة التفعيل</th>
           <th></th>
          
            </thead>
            <tbody>
         @foreach ($data as $info )
            <tr>
             <td>{{ $i }}</td>  
             <td>{{ $info->name }}</td>  
             <td>@if($info->is_master==1) رئيسية @else فرعية @endif</td>  
             <td>{{ $info->last_isal_exhcange }}</td>  
             <td>{{ $info->last_isal_collect }}</td>  
             @if($info->active==1)
             <td class="bg-success">مفعل</td>
               @else 
               <td class="bg-danger">معطل</td>
               @endif
            <td>
        <a href="{{ route('admin.treasuries.edit',$info->id) }}" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a> 
        <button data-id="{{ $info->id }}" class="btn btn-sm btn-icon btn-info"><i class="fas fa-info-circle"></i></a>
   
         </td>
           
   
           </tr> 
      @php
         $i++; 
      @endphp
         @endforeach
   
   
   
            </tbody>
             </table>
      <br>
 <div class="col-md-12" id="ajax_pagination_in_search">
    {{ $data->links() }}
 </div>

         
       
           @else
           <div class="alert alert-danger">
             عفوا لاتوجد بيانات لعرضها !!
           </div>
                 @endif
