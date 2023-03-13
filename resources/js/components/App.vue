<template>
    <section>
      <div class="card">
          <div class="card-body">
              <h1 class="text-center my-3">CHARLIE INTERVIEW QUESTION</h1>
              <div class="row">
                  <div class="col-3"></div>
                  <div class="col-6">
                      <div class="table-responsive">
                          <table  class="text-center table table-bordered align-middle">
                              <thead class="table-light text-center">
                                  <tr>
                                      <th>Index#</th>
                                      <th>Value</th>
                                  </tr>
                              </thead>
                              <tbody v-for="(maindata,index) in maindatas.data" :key="index" >
                                  <tr>
                                      <td :id="`${maindata.index}`">{{ maindata.index }}</td>
                                      <td >{{ maindata.value }}</td>
                                  </tr>
                              </tbody>
                          </table>
                      </div>
                  </div>
                  <div class="col-3"></div>
              </div>   
          </div>
      </div>
    </section>
    <footer class="pt-5">
      <div class="row">
          <div class="col-4"></div>
          <div class="col-4">
              <div class="table-responsive">
                  <table  class="text-center table table-bordered align-middle">
                      <thead class="table-dark text-center">
                                          <tr>
                                              <th>Category</th>
                                              <th>Value</th>
                                          </tr>
                                      </thead>
                                      <tbody v-if="maindatas.data">
                                          <tr >
                                              <th>Alpha</th>
                                              <th>{{ maindatas.data[4].value + maindatas.data[19].value  }}</th>
                                          </tr>
                                          <tr>
                                              <th>Beta</th>
                                              <th>{{ maindatas.data[14].value / maindatas.data[6].value  }}</th>
                                          </tr>
                                          <tr>
                                              <th>Charlie</th>
                                              <th>{{ maindatas.data[12].value * maindatas.data[11].value  }}</th>
                                          </tr>
                                          
                                          
                                      </tbody>
  
                                      <tbody v-else>
                                          No record found
                                      </tbody>
                                      <!-- <tbody>
                                          {{ maindatas.data }}
                                      </tbody> -->
                  </table>
              </div>
          </div>
          <div class="col-4">
            
                  
              
          </div>
      </div>
    </footer>
  </template>
  
  <script>
  
  import { mapGetters } from "vuex";
  
  export default {
      name: 'App',
      data(){
          return{
              maindata:[
  
                  
              ]
          }
      },
      computed:{
          ...mapGetters("interview",["maindatas"])
      },
      async mounted(){
          this.$store.dispatch("interview/getMainDatas");
      }
  }
  </script>
  
  <style>
  
  </style>
  
  