<template>
     <div id='myapp'>
        <!-- Select All records -->
        <input type='button' @click='allRecords()' value='Select All users'>

        <br><br>

        <!-- Select record by ID -->
        <input type='text' v-model='title' placeholder="area">
      

        <input type='button' @click='recordByID()' value='area'>
        <br><br>

        <!-- List records -->
        <table border='1' width='80%' style='border-collapse: collapse;'>
            <tr>
                <th>ID</th>
                <th>Office</th>
                <th>Internal</th>
                <th>tanggal</th>
            </tr>

            <tr v-for='user in users' v-bind:key="user">
                <td>{{ user.id }}</td>
                <td>{{ user.title }}</td>
                <td>{{ user.content }}</td>
              
            </tr>
        </table>
    </div>

  
</template>
  <script src="app.js"></script>
  

<script>
export default {
    
    data () {
        return{
        id: "",
       
        title: [],
        content: []
       
        }
    },
   

    methods: {
        allRecords: function() {

            axios.get('http://localhost:8000/api/posts/')
                .then(function(response) {
                    app.users = response.data;
                })
                .catch(function(error) {
                    console.log(error);
                });
        },
        recordByID: function() {


            axios.get('http://dummy.restapiexample.com/api/v1/employees', {
                    params: {
                        office: this.data

                    }
                })
                .then(function(response) {
                    app.users = response.data;
                })
                .catch(function(error) {
                    console.log(error);
                });


        }
    }
}
</script>