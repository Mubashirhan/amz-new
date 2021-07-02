<template>
<!-- /.wrapper -->
    <div class="wrapper light-wrapper">
      <div class="container inner">
        <h2 class="section-title">Request a Quote</h2>
        <p class="lead larger">Get a quick response for your desired service.</p>
        <div class="space40"></div>
        <div class="row">
          <div class="col-lg-7">
            <form>

                <div v-show="step === 1">

                    <h1>Step One</h1>
                    <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control mb-2" name="name" autocomplete="off" placeholder="John Doe"/>
                            </div>
                            <div class="form-group">
                                <label>ASIN/URL (if applicable)</label>
                                <input type="number" class="form-control" name="asin" autocomplete="off" placeholder="Valid ASIN"/>
                            </div>
                            <div class="form-group">
                                <label>Budget</label>
                                <select class="form-control form-control-sm mb-3" name="budget">
                                    <option class="" value="$250 - $500">$250 - $500</option>
                                    <option class="" value="$500 - $1000">$500 - $1000</option>
                                    <option class="" value="$1000 - $2000">$1000 - $2000</option>
                                    <option class="" value="$2000 - $5000">$2000 - $5000</option>
                                    <option class="" value="More than $5000">More than $5000</option>
                                </select>
                            </div>
                    <button @click.prevent="next()">Next</button>
                    
                </div>
            
                <div v-show="step === 2">

                    <h1>Step Two</h1>
                    <!-- <span class="btn btn-outline-primary mb-1 mb-md-0 mr-1" v-for="btn in services_btn" :key="btn">
                        <span @click="serviceQarray(btn)">{{btn}}</span>

                    </span> -->
                    <a 
                    v-on:click="showPhotography = !showPhotography; serviceQarray() "
                    class="btn btn-outline-primary mb-1 mb-md-0 mr-1" >
                        Product Photography
                    </a>

                    <a 
                    v-on:click="showVideography = !showVideography; serviceQarray()"
                    class="btn btn-outline-primary mb-1 mb-md-0 mr-1" >
                        Product Videography
                    </a> 

                    <a 
                    v-on:click="listingOptimization = !listingOptimization; serviceQarray()"
                    class="btn btn-outline-primary mb-1 mb-md-0 mr-1" >
                        Listing Optimization
                    </a>

                    <a 
                    v-on:click="ebc = !ebc; serviceQarray()"
                    class="btn btn-outline-primary mb-1 mb-md-0 mr-1" >
                        Enhanced Brand Content
                    </a>

                    <a 
                    v-on:click="ppc = !ppc; serviceQarray()"
                    class="btn btn-outline-primary mb-1 mb-md-0 mr-1" >
                        Pay Per Click
                    </a>

                    <a 
                    v-on:click="accountManagement = !accountManagement; serviceQarray()"
                    class="btn btn-outline-primary mb-1 mb-md-0 mr-1" >
                        Account Management
                    </a>

                    <a 
                    v-on:click="packageDesign = !packageDesign; serviceQarray()"
                    class="btn btn-outline-primary mb-1 mb-md-0 mr-1" >
                        Packaging Design
                    </a>

                    <a 
                    v-on:click="drendering = !drendering; serviceQarray()"
                    class="btn btn-outline-primary mb-1 mb-md-0 mr-1" >
                        3D Rendering
                    </a> 
                    <button @click.prevent="prev()">Previous</button>

                    <button @click.prevent="next()">Next</button>
                    
                </div>
                  
                <div v-if="showPhotography == true" v-show="step === qno">

                  <h1>Photography</h1>
                  <div class="form-group">
                              <label>{{services.photography.Q1.Q}}</label>
                              <select class="form-control form-control-sm mb-3" name="budget">
                                <option class="" value="2">2</option>

                                  <!-- <option class="" value="1">1</option>
                                  <option class="" value="2">2</option>
                                  <option class="" value="3">3</option>
                                  <option class="" value="4">4</option>
                                  <option class="" value="5">5</option>
                                  <option class="" value="6">6</option>
                                  <option class="" value="7">7</option>
                                  <option class="" value="8">8</option>
                                  <option class="" value="9">9</option>
                                  <option class="" value="10">10</option> -->
                              </select>
                          </div>
                          <div class="form-group">
                              <label>{{services.photography.Q2.Q}}</label>
                              <input type="text" class="form-control" name="email" placeholder="john@gmail.com"/>
                          </div>
                          <div class="form-group">
                              <label>{{services.photography.Q3.Q}}</label>
                              <input type="number" class="form-control" name="asin" autocomplete="off" placeholder="Valid ASIN"/>
                          </div>
                          <div class="form-group">
                              <label>{{services.photography.Q4.Q}}</label>
                              <select class="form-control form-control-sm mb-3" name="budget">
                                  <option class="" value="$250 - $500">$250 - $500</option>
                                  <option class="" value="$500 - $1000">$500 - $1000</option>
                                  <option class="" value="$1000 - $2000">$1000 - $2000</option>
                                  <option class="" value="$2000 - $5000">$2000 - $5000</option>
                                  <option class="" value="More than $5000">More than $5000</option>
                              </select>
                          </div>
                          <div class="form-group">
                              <label>{{services.photography.Q5.Q}}</label>
                              <input type="number" class="form-control" name="asin" autocomplete="off" placeholder="Valid ASIN"/>
                          </div>
                  <button @click.prevent="prev()">Previous</button>
                  
                  <button @click.prevent="next()">Next</button>
                  
                </div>

                <div v-if="showVideography == true" v-show="step === qno">

                  <h1>Videography</h1>
                  <div class="form-group">
                              <label>Name</label>
                              <input type="text" class="form-control mb-2" name="name" autocomplete="off" placeholder="John Doe"/>
                          </div>
                          <div class="form-group">
                              <label>Email</label>
                              <input type="text" class="form-control" name="email" placeholder="john@gmail.com"/>
                          </div>
                          <div class="form-group">
                              <label>ASIN/URL (if applicable)</label>
                              <input type="number" class="form-control" name="asin" autocomplete="off" placeholder="Valid ASIN"/>
                          </div>
                          <div class="form-group">
                              <label>Budget</label>
                              <select class="form-control form-control-sm mb-3" name="budget">
                                  <option class="" value="$250 - $500">$250 - $500</option>
                                  <option class="" value="$500 - $1000">$500 - $1000</option>
                                  <option class="" value="$1000 - $2000">$1000 - $2000</option>
                                  <option class="" value="$2000 - $5000">$2000 - $5000</option>
                                  <option class="" value="More than $5000">More than $5000</option>
                              </select>
                          </div>
                  <button @click.prevent="prev()">Previous</button>
                  
                  <button @click.prevent="next()">Next</button>
                  
                </div>

                <div v-if="listingOptimization == true" v-show="step === qno">

                  <h1>Listing Optimization</h1>
                  <div class="form-group">
                              <label>Name</label>
                              <input type="text" class="form-control mb-2" name="name" autocomplete="off" placeholder="John Doe"/>
                          </div>
                          <div class="form-group">
                              <label>Email</label>
                              <input type="text" class="form-control" name="email" placeholder="john@gmail.com"/>
                          </div>
                          <div class="form-group">
                              <label>ASIN/URL (if applicable)</label>
                              <input type="number" class="form-control" name="asin" autocomplete="off" placeholder="Valid ASIN"/>
                          </div>
                          <div class="form-group">
                              <label>Budget</label>
                              <select class="form-control form-control-sm mb-3" name="budget">
                                  <option class="" value="$250 - $500">$250 - $500</option>
                                  <option class="" value="$500 - $1000">$500 - $1000</option>
                                  <option class="" value="$1000 - $2000">$1000 - $2000</option>
                                  <option class="" value="$2000 - $5000">$2000 - $5000</option>
                                  <option class="" value="More than $5000">More than $5000</option>
                              </select>
                          </div>
                  <button @click.prevent="prev()">Previous</button>
                  
                  <button @click.prevent="next()">Next</button>
                  
                </div>

                <div v-if="accountManagement == true" v-show="step === qno">

                  <h1>Account Management</h1>
                  <div class="form-group">
                              <label>Name</label>
                              <input type="text" class="form-control mb-2" name="name" autocomplete="off" placeholder="John Doe"/>
                          </div>
                          <div class="form-group">
                              <label>Email</label>
                              <input type="text" class="form-control" name="email" placeholder="john@gmail.com"/>
                          </div>
                          <div class="form-group">
                              <label>ASIN/URL (if applicable)</label>
                              <input type="number" class="form-control" name="asin" autocomplete="off" placeholder="Valid ASIN"/>
                          </div>
                          <div class="form-group">
                              <label>Budget</label>
                              <select class="form-control form-control-sm mb-3" name="budget">
                                  <option class="" value="$250 - $500">$250 - $500</option>
                                  <option class="" value="$500 - $1000">$500 - $1000</option>
                                  <option class="" value="$1000 - $2000">$1000 - $2000</option>
                                  <option class="" value="$2000 - $5000">$2000 - $5000</option>
                                  <option class="" value="More than $5000">More than $5000</option>
                              </select>
                          </div>
                  <button @click.prevent="prev()">Previous</button>
                  
                  <button @click.prevent="next()">Next</button>
                  
                </div>

                <div v-if="ebc == true" v-show="step === qno">

                  <h1>EBC</h1>
                  <div class="form-group">
                              <label>Name</label>
                              <input type="text" class="form-control mb-2" name="name" autocomplete="off" placeholder="John Doe"/>
                          </div>
                          <div class="form-group">
                              <label>Email</label>
                              <input type="text" class="form-control" name="email" placeholder="john@gmail.com"/>
                          </div>
                          <div class="form-group">
                              <label>ASIN/URL (if applicable)</label>
                              <input type="number" class="form-control" name="asin" autocomplete="off" placeholder="Valid ASIN"/>
                          </div>
                          <div class="form-group">
                              <label>Budget</label>
                              <select class="form-control form-control-sm mb-3" name="budget">
                                  <option class="" value="$250 - $500">$250 - $500</option>
                                  <option class="" value="$500 - $1000">$500 - $1000</option>
                                  <option class="" value="$1000 - $2000">$1000 - $2000</option>
                                  <option class="" value="$2000 - $5000">$2000 - $5000</option>
                                  <option class="" value="More than $5000">More than $5000</option>
                              </select>
                          </div>
                  <button @click.prevent="prev()">Previous</button>
                  
                  <button @click.prevent="next()">Next</button>
                  
                </div>

                <div v-if="ppc == true" v-show="step === qno">

                  <h1>PPC</h1>
                  <div class="form-group">
                              <label>Name</label>
                              <input type="text" class="form-control mb-2" name="name" autocomplete="off" placeholder="John Doe"/>
                          </div>
                          <div class="form-group">
                              <label>Email</label>
                              <input type="text" class="form-control" name="email" placeholder="john@gmail.com"/>
                          </div>
                          <div class="form-group">
                              <label>ASIN/URL (if applicable)</label>
                              <input type="number" class="form-control" name="asin" autocomplete="off" placeholder="Valid ASIN"/>
                          </div>
                          <div class="form-group">
                              <label>Budget</label>
                              <select class="form-control form-control-sm mb-3" name="budget">
                                  <option class="" value="$250 - $500">$250 - $500</option>
                                  <option class="" value="$500 - $1000">$500 - $1000</option>
                                  <option class="" value="$1000 - $2000">$1000 - $2000</option>
                                  <option class="" value="$2000 - $5000">$2000 - $5000</option>
                                  <option class="" value="More than $5000">More than $5000</option>
                              </select>
                          </div>
                  <button @click.prevent="prev()">Previous</button>
                  
                  <button @click.prevent="next()">Next</button>
                  
                </div>

                <div v-if="packageDesign == true" v-show="step === qno">

                  <h1>Package Design</h1>
                  <div class="form-group">
                              <label>Name</label>
                              <input type="text" class="form-control mb-2" name="name" autocomplete="off" placeholder="John Doe"/>
                          </div>
                          <div class="form-group">
                              <label>Email</label>
                              <input type="text" class="form-control" name="email" placeholder="john@gmail.com"/>
                          </div>
                          <div class="form-group">
                              <label>ASIN/URL (if applicable)</label>
                              <input type="number" class="form-control" name="asin" autocomplete="off" placeholder="Valid ASIN"/>
                          </div>
                          <div class="form-group">
                              <label>Budget</label>
                              <select class="form-control form-control-sm mb-3" name="budget">
                                  <option class="" value="$250 - $500">$250 - $500</option>
                                  <option class="" value="$500 - $1000">$500 - $1000</option>
                                  <option class="" value="$1000 - $2000">$1000 - $2000</option>
                                  <option class="" value="$2000 - $5000">$2000 - $5000</option>
                                  <option class="" value="More than $5000">More than $5000</option>
                              </select>
                          </div>
                  <button @click.prevent="prev()">Previous</button>
                  
                  <button @click.prevent="next()">Next</button>
                  
                </div>

                <div v-if="drendering == true" v-show="step === qno">

                  <h1>3D Rendering</h1>
                  <div class="form-group">
                              <label>Name</label>
                              <input type="text" class="form-control mb-2" name="name" autocomplete="off" placeholder="John Doe"/>
                          </div>
                          <div class="form-group">
                              <label>Email</label>
                              <input type="text" class="form-control" name="email" placeholder="john@gmail.com"/>
                          </div>
                          <div class="form-group">
                              <label>ASIN/URL (if applicable)</label>
                              <input type="number" class="form-control" name="asin" autocomplete="off" placeholder="Valid ASIN"/>
                          </div>
                          <div class="form-group">
                              <label>Budget</label>
                              <select class="form-control form-control-sm mb-3" name="budget">
                                  <option class="" value="$250 - $500">$250 - $500</option>
                                  <option class="" value="$500 - $1000">$500 - $1000</option>
                                  <option class="" value="$1000 - $2000">$1000 - $2000</option>
                                  <option class="" value="$2000 - $5000">$2000 - $5000</option>
                                  <option class="" value="More than $5000">More than $5000</option>
                              </select>
                          </div>
                  <button @click.prevent="prev()">Previous</button>
                  
                  <button @click.prevent="next()">Next</button>
                  
                </div>

                
              <div v-show="Object.keys(service_qs).length > 0 ? step === 4: step === 3">

                  <h1>Step 3</h1>
                          <div class="form-group">
                              <label>Email</label>
                              <input type="text" class="form-control" name="email" placeholder="john@gmail.com"/>
                          </div>
                  <button @click.prevent="prev()">Previous</button>

                  <button @click.prevent="submit()">Submit</button>
                  
              </div>

            </form>

          </div>
          <!--/column -->
          <!--/column -->
        </div>
        <!--/.row -->
      </div>
      <!-- /.container -->
    </div>
    <!-- /.wrapper -->

</template>

<script>
    export default {
          data() {
    return {
      step:1,
        qno:3,
        service_qs: {},
        showPhotography:false,
        showVideography:false,
        listingOptimization:false,
        ebc:false,
        ppc:false,
        accountManagement:false,
        packageDesign:false,
        drendering:false,
        services:{
                    photography:{
                        Q1:{
                            Q:'How many images are you looking for?',
                            A:'',
                            options:{
                                op1: '1',
                                op2: '2',
                                op3: '3',
                                op4: '4',
                                op5: '5',
                                op6: '6',
                                op7: '7',
                                op8: '8',
                                op9: '9',
                                op10:'10',
                            },
                            S:'Photography',
                        },
                        Q2:{
                            Q:'Do you prefer real model or stock images?',
                            A: '',
                            op1: 'Stock Images',
                            op2: 'Real Model',
                            op3: 'Both',
                            S:'Photography',
                        },
                        Q3:{
                            Q:'Do you need lifestyle images?',
                            A: '',
                            op1: 'Yes',
                            op2: 'No',
                            S:'Photography',
                        },
                        Q4:{
                            Q:'Would you be able to ship your product sample to our studio?',
                            A: '',
                            op1: 'Yes',
                            op2: 'No',
                            S:'Photography',
                        },
                        Q5:{
                            Q:'Can you share atleast one competitor&aposs listing URL? (if applicable)',
                            A: '',
                            S:'Photography',
                        }

                    },
                    videography:{
                         Q1:{
                            Q:'What is your desired length of video?',
                            A:'',
                            op1: 'less than 30 seconds',
                            op2: '30 seconds - 1 min',
                            op3: '1 min - 3 min',
                            op4: '3 min - 5 min',
                            op4: 'more than 5 min',
                            S:'Videography',
                        },
                        Q2:{
                            Q:'Do you need voice-over?',
                            A: '',
                            op1: 'Yes',
                            op2: 'No',
                            S:'Videography',
                        },
                        Q3:{
                            Q:'Would you be able to ship your product sample to our studio?',
                            A: '',
                            op1: 'Yes',
                            op2: 'No',
                            S:'Videography',
                        },
                        Q4:{
                            Q:'Do you need model in your video?',
                            A: '',
                            op1: 'Yes',
                            op2: 'No',
                            S:'Videography',
                        },
                        Q5:{
                            Q:'Can you share atleast one competitor&aposs listing URL? (if applicable)',
                            A: '',
                            S:'Videography',
                        }
                    },
                    optimization:{
                         Q1:{
                            Q:'Is your listing live on Amazon?',
                            A:'',
                            op1: 'Yes',
                            op2: 'No',
                            S:'optimization',
                        },
                        Q2:{
                            Q:'Does your listing have child variation?',
                            A: '',
                            op1: 'Yes',
                            op2: 'No',
                            S:'optimization',
                        },
                        Q3:{
                            Q:'Can you share atleast one competitor&aposs listing URL? (if applicable)',
                            A: '',
                            S:'optimization',
                        },
                    },
                    ebc:{
                         Q1:{
                            Q:'Is your listing live on Amazon?',
                            A:'',
                            op1: 'Yes',
                            op2: 'No',
                            S:'ebc',
                        },
                        Q2:{
                            Q:'Does your listing have child variation?',
                            A: '',
                            op1: 'Yes',
                            op2: 'No',
                            S:'ebc',
                        },
                        Q3:{
                            Q:'Can you share atleast one competitor&aposs listing URL? (if applicable)',
                            A: '',
                            S:'ebc',
                        },
                    },
                     ppc:{
                         Q1:{
                            Q:'Can you share the store front link? (if applicable)',
                            A:'',
                            S:'ppc',
                        }
                    },
                    accountManagement:{
                         Q1:{
                            Q:'Are you currently selling on Amazon?',
                            A:'',
                            op1: 'Yes',
                            op2: 'No',
                            S:'accountManagement',
                        },
                        Q2:{
                            Q:'Check the boxes you want assistance with',
                            A: '',
                            op1: 'Product Research',
                            op2: 'Product Launch',
                            op1: 'Ranking',
                            op2: 'Inventory Management',
                            op1: 'Customer Support',
                            S:'accountManagement',
                        },
                        Q3:{
                            Q:'Which Amazon marketplace are you selling on?',
                            A: '',
                            S:'accountManagement',
                        },
                        Q4:{
                            Q:'Link to existing Listing or Storefront (if applicable)',
                            A: '',
                            S:'accountManagement',
                        }
                    },
                    packageDesign:{
                         Q1:{
                            Q:'What is the product? (optional)',
                            A:'',
                            S:'packageDesign',
                        },
                        Q2:{
                            Q:'What is your brand message?',
                            A: '',
                            S:'packageDesign',
                        },
                        Q3:{
                            Q:'Can you define your target audience in 1-2 lines?',
                            A: '',
                            S:'packageDesign',
                        },
                        Q4:{
                            Q:'Can you share atleast one competitor listing URL? (if applicable)',
                            A: '',
                            S:'packageDesign',
                        }
                    },
                    rendering:{
                        Q1:{
                            Q:'How many angles do you need?',
                            A:'',
                            op1: '1',
                            op2: '2',
                            op3: '3',
                            op4: '4',
                            op5: '5',
                            op6: '6',
                            op7: '7',
                            op8: '8',
                            op9: '9',
                            op10:'10',
                            S:'rendering',
                        },
                        Q2:{
                            Q:'Would you be able to ship your product sample to our studio?',
                            A: '',
                            op1: 'Yes',
                            op2: 'No',
                            S:'rendering',
                        },
                        Q3:{
                            Q:'Can you share atleast one competitor listing URL? (if applicable)',
                            A: '',
                            S:'rendering',
                        }
                    }
                },
      registration:{
        name:null,
        email:null,
        street:null,
        city:null,
        state:null,
        numtickets:0,
        shirtsize:'XL'
      }
    }
  },
    methods:{
    prev() {
      this.step--;
    },
    next() {
      this.step++;
    },
    submit() {
      alert('submit');
    },
    serviceQarray(val){
       
        
    if(this.showPhotography == true ){
                this.service_qs.photography = 1 ;
      }else{
            delete this.service_qs.photography;
      }

      if(this.showVideography == true){
        this.service_qs.videography = 1;
      }else{
        delete this.service_qs.videography;
      }
    }
  },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
