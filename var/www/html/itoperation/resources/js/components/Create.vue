<template>



    <div class="row">
        <div class="col-12">

                       <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Bordered Table</h3>
                    <div class="card-tools">
      <button type="button" class="btn btn-block btn-warning btn-sm" data-toggle="modal" data-target="#modal-lg">Wiki</button>
          
                  
                 
                </div>
                <!-- /.card-header -->
                
                </div>
                <div class="card-body">
                    <div class="row"> 
                        <div class="col-lg-2"> 
                       <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="fas fa-at"></i>
                      </span>
                    </div>
                 <input type="text" class="form-control form-control-sm"  v-model='office' placeholder="Channel">
                  </div>              
                        </div>
                        <div >
                    <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="far fa-calendar-alt"></i>
                      </span>
                    </div>
                     <datetime format="YYYY-MM-DD h:i:s"  v-model='date'   name='dob2'></datetime>
                  </div>
                        </div>


                         <div  >
                           <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="far fa-calendar-alt"></i>
                      </span>
                    </div>
                     <datetime format="YYYY-MM-DD h:i:s"  v-model='date2'   name='dob2'></datetime>
                  </div>
                        </div>


                         <div class="col-md-1">
                        <button type="button" @click='recordByID()' class="btn btn-sm btn-success">Search.!</button>
                         </div>
                    </div>
                    <br>
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Name</th>
                                <th>Office</th>
                                <th >Download</th>
                                 <th>Upload</th>
                                  <th>Ping</th>
                                    <th>Battery</th>
                                    <th>Remarks</th>
                                <th>Tanggal</th>
                              
                            </tr>
                           <tr v-for="(user, index) in users" :key="user.hdr_id">
                             <td>{{index}}</td>
                                    <td>{{ user.name }}</td>
                                    <td>{{ user.office }}</td>
                                    <td>{{ user.download }}</td>
                                    <td>{{ user.upload }}</td>
                                    <td>{{ user.ping }}</td>
                                  
                                    <td>{{ user.battery_ups }}</td>
                                    <td>{{ user.remarks }}</td>
                                    <td>{{ user.tanggal }}</td>
                                </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->

                 <!-- /.MODAL -->
              <div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Section Info</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>One fine body&hellip;</p>
        </div>
        <div class="modal-footer justify-content-between">
         
          <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal --> 


            </div>
        </div>
    </div>


</template>


<script>

import datetime from 'vuejs-datetimepicker'
    export default {
     components: { datetime },
        data() {
            return {
                posts: [],
                office :"",
             
                date:'',
                date2: '',
                users : "",
            }
            
        },

        
 
         methods:
         
         {              
       
    
       
        recordByID: function() {


            axios.get('http://10.56.45.133/itoperation/api/post', {
                    params: {
                        office: this.office,
                        date: this.date,
                        date2: this.date2

                    }
                })
                .then(response => {
                   this.users = response.data;
                })
                .catch(function(error) {
                    console.log(error);
                });


        }
    }
    }
</script>