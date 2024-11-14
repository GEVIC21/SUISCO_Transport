@extends('layouts.master')
@section('content')
<div class="mobile-search">
    <form action="/" class="search-form">
       <img src="img/svg/search.svg" alt="search" class="svg">
       <input class="form-control me-sm-2 box-shadow-none" type="search" placeholder="Search..." aria-label="Search">
    </form>
 </div>
 <div class="mobile-author-actions"></div>

@include('layouts.header')

 <main class="main-content">

@include('layouts.sidebar')

    <div class="contents">


       <div class="demo5 mt-30 mb-25">
          <div class="container-fluid">
             <div class="row">
                <div class="col-xxl-12 mb-25">
                   <div class="card banner-feature--18 new d-flex bg-white">
                      <div class="container-fluid">
                         <div class="row">
                            <div class="col-xl-6">
                               <div class="card-body px-25">
                                  <h1 class="banner-feature__heading color-dark">Hey Danial! Welcome to the Dashboard
                                  </h1>
                                  <p class="banner-feature__para color-dark">There are many variations of passages of
                                     Lorem Ipsum available,<br>
                                     ut the majority have suffered passages of Lorem Ipsum available alteration in
                                     some form
                                  </p>
                                  <div class="d-flex justify-content-sm-start justify-content-center">
                                     <button class="banner-feature__btn btn btn-primary color-white btn-md radius-xs fs-15" type="button">Learn More</button>
                                  </div>
                               </div>
                            </div>
                            <div class="col-xl-6">
                               <div class="banner-feature__shape">
                                  <img src="img/danial.png" alt="img">
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="col-xxl-8 mb-25">

                   <div class="card border-0 px-25 h-100">
                      <div class="card-header px-0 border-0">
                         <h6>User Overview</h6>
                         <div class="card-extra">
                            <ul class="card-tab-links nav-tabs nav" role="tablist">
                               <li>
                                  <a href="#salesgrowth" data-bs-toggle="tab" id="salesgrowth-tab" role="tab" aria-selected="false">Today</a>
                               </li>
                               <li>
                                  <a href="#salesgrowth2" data-bs-toggle="tab" id="salesgrowth2-tab" role="tab" aria-selected="false">Week</a>
                               </li>
                               <li>
                                  <a class="active" href="#salesgrowth3" data-bs-toggle="tab" id="salesgrowth3-tab" role="tab" aria-selected="true">Month</a>
                               </li>
                            </ul>
                         </div>
                      </div>
                      <div class="card-body p-0 pb-sm-25">
                         <div class="tab-content">
                            <div class="tab-pane" id="salesgrowth" role="tabpanel" aria-labelledby="salesgrowth-tab">
                               <div class="label-detailed label-detailed--two">
                                  <div class="label-detailed__single">
                                     <span class="label-detailed__type label-detailed__type--primary">Target</span>
                                     <strong class="label-detailed__total">$8,550</strong>
                                     <span class="label-detailed__status color-success">
                                        <img class="svg" src="img/svg/arrow-success-up.svg" alt="">
                                        <strong>25%</strong>
                                     </span>
                                  </div>
                                  <div class="label-detailed__single">
                                     <span class="label-detailed__type label-detailed__type--info">Gained</span>
                                     <strong class="label-detailed__total">$5,550</strong>
                                     <span class="label-detailed__status color-danger">
                                        <img class="svg" src="img/svg/arrow-danger-down.svg" alt="">
                                        <strong>15%</strong>
                                     </span>
                                  </div>
                               </div>
                               <div class="parentContainer">


                                  <div>
                                     <canvas id="salesGrowthNewToday"></canvas>
                                  </div>


                               </div>
                            </div>
                            <div class="tab-pane" id="salesgrowth2" role="tabpanel" aria-labelledby="salesgrowth2-tab">
                               <div class="label-detailed label-detailed--two">
                                  <div class="label-detailed__single">
                                     <span class="label-detailed__type label-detailed__type--primary">Target</span>
                                     <strong class="label-detailed__total">$8,550</strong>
                                     <span class="label-detailed__status color-success">
                                        <img class="svg" src="img/svg/arrow-success-up.svg" alt="">
                                        <strong>25%</strong>
                                     </span>
                                  </div>
                                  <div class="label-detailed__single">
                                     <span class="label-detailed__type label-detailed__type--info">Gained</span>
                                     <strong class="label-detailed__total">$5,550</strong>
                                     <span class="label-detailed__status color-danger">
                                        <img class="svg" src="img/svg/arrow-danger-down.svg" alt="">
                                        <strong>15%</strong>
                                     </span>
                                  </div>
                               </div>
                               <div class="parentContainer">


                                  <div>
                                     <canvas id="salesGrowthNewWeek"></canvas>
                                  </div>


                               </div>
                            </div>
                            <div class="tab-pane  active show" id="salesgrowth3" role="tabpanel" aria-labelledby="salesgrowth3-tab">
                               <div class="label-detailed label-detailed--two">
                                  <div class="label-detailed__single">
                                     <span class="label-detailed__type label-detailed__type--primary">Target</span>
                                     <strong class="label-detailed__total">$8,550</strong>
                                     <span class="label-detailed__status color-success">
                                        <img class="svg" src="img/svg/arrow-success-up.svg" alt="">
                                        <strong>25%</strong>
                                     </span>
                                  </div>
                                  <div class="label-detailed__single">
                                     <span class="label-detailed__type label-detailed__type--info">Gained</span>
                                     <strong class="label-detailed__total">$5,550</strong>
                                     <span class="label-detailed__status color-danger">
                                        <img class="svg" src="img/svg/arrow-danger-down.svg" alt="">
                                        <strong>15%</strong>
                                     </span>
                                  </div>
                               </div>
                               <div class="parentContainer">


                                  <div>
                                     <canvas id="salesGrowthNewMonth"></canvas>
                                  </div>


                               </div>
                            </div>
                         </div>
                      </div>
                   </div>

                </div>
                <div class="col-xxl-4 col-lg-6 order-xxl-0 order-1 mb-25">
                   <div class="card card-md border-0 mb-4 date-picker__calendar-height h-100">
                      <div class="card-header py-md-0">
                         <h6>Calendar 2023</h6>
                         <div class="dropdown dropleft">
                            <a href="#" role="button" id="Today" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               <img src="img/svg/more-horizontal.svg" alt="more-horizontal" class="svg">
                            </a>
                            <div class="dropdown-menu" aria-labelledby="Today">
                               <a class="dropdown-item" href="#">Action</a>
                               <a class="dropdown-item" href="#">Another action</a>
                               <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                         </div>
                      </div>
                      <div class="card-body px-10">
                         <div class="date-picker date-picker--demo5 new">
                            <div class="date-picker__calendar"></div>
                         </div>
                      </div>
                   </div>
                   <!-- ends: .card -->
                </div>
                <div class="col-xxl-6 mb-25">

                   <div class="card border-0 px-25 pb-15 h-100">
                      <div class="card-header px-0 border-0">
                         <h6>Member Progress</h6>
                         <div class="card-extra">
                            <ul class="card-tab-links nav-tabs nav" role="tablist">
                               <li>
                                  <a class="active" href="#t_selling-today22" data-bs-toggle="tab" id="t_selling-today22-tab" role="tab" aria-selected="true">Today</a>
                               </li>
                               <li>
                                  <a href="#t_selling-week22" data-bs-toggle="tab" id="t_selling-week22-tab" role="tab" aria-selected="true">Week</a>
                               </li>
                               <li>
                                  <a href="#t_selling-month33" data-bs-toggle="tab" id="t_selling-month33-tab" role="tab" aria-selected="true">Month</a>
                               </li>
                            </ul>
                         </div>
                      </div>
                      <div class="card-body p-0">
                         <div class="tab-content">
                            <div class="tab-pane fade active show" id="t_selling-today22" role="tabpanel" aria-labelledby="t_selling-today22-tab">
                               <div class="selling-table-wrap selling-table-wrap--source selling-table-wrap--member">
                                  <div class="table-responsive">
                                     <table class="table table--default table-borderless">
                                        <tbody>
                                           <tr>
                                              <td>
                                                 <div class="selling-product-img d-flex align-items-center">
                                                    <div class="selling-product-img-wrapper order-bg-opacity-primary">
                                                       <img class="img-fluid" src="img/author/robert-1.png" alt="img">
                                                    </div>
                                                    <span>Robert Clinton</span>
                                                 </div>
                                              </td>
                                              <td>$38,536</td>
                                              <td>
                                                 <div class="status">
                                                    <ul>
                                                       <li>ReactJs</li>
                                                       <li>HTML</li>
                                                    </ul>
                                                 </div>
                                              </td>
                                              <td>
                                                 <div class="d-flex align-center justify-content-end">
                                                    <div class="progress-wrap mb-0">
                                                       <div class="progress">
                                                          <div class="progress-bar bg-primary" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>

                                                       </div>
                                                    </div>
                                                    <div class="ratio-percentage ms-10">80%</div>
                                                 </div>
                                              </td>
                                           </tr>
                                           <tr>
                                              <td>
                                                 <div class="selling-product-img d-flex align-items-center">
                                                    <div class="selling-product-img-wrapper order-bg-opacity-primary">
                                                       <img class="img-fluid" src="img/author/robert-2.png" alt="img">
                                                    </div>
                                                    <span>Member Progress</span>
                                                 </div>
                                              </td>
                                              <td>$20,573</td>
                                              <td>
                                                 <div class="status">
                                                    <ul>
                                                       <li>Laravel</li>
                                                       <li>Angular</li>
                                                    </ul>
                                                 </div>
                                              </td>
                                              <td>
                                                 <div class="d-flex align-center justify-content-end">
                                                    <div class="progress-wrap mb-0">
                                                       <div class="progress">
                                                          <div class="progress-bar bg-info" role="progressbar" style="width: 52%;" aria-valuenow="52" aria-valuemin="0" aria-valuemax="100"></div>

                                                       </div>
                                                    </div>
                                                    <div class="ratio-percentage ms-10">52%</div>
                                                 </div>
                                              </td>
                                           </tr>
                                           <tr>
                                              <td>
                                                 <div class="selling-product-img d-flex align-items-center">
                                                    <div class="selling-product-img-wrapper order-bg-opacity-primary">
                                                       <img class="img-fluid" src="img/author/robert-5.png" alt="img">
                                                    </div>
                                                    <span>Daniel White</span>
                                                 </div>
                                              </td>
                                              <td>$17,457</td>
                                              <td>
                                                 <div class="status">
                                                    <ul>
                                                       <li>Python</li>
                                                       <li>MySQL</li>
                                                    </ul>
                                                 </div>
                                              </td>
                                              <td>
                                                 <div class="d-flex align-center justify-content-end">
                                                    <div class="progress-wrap mb-0">
                                                       <div class="progress">
                                                          <div class="progress-bar bg-success" role="progressbar" style="width: 720%;" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>

                                                       </div>
                                                    </div>
                                                    <div class="ratio-percentage ms-10">72%</div>
                                                 </div>
                                              </td>
                                           </tr>
                                           <tr>
                                              <td>
                                                 <div class="selling-product-img d-flex align-items-center">
                                                    <div class="selling-product-img-wrapper order-bg-opacity-primary">
                                                       <img class="img-fluid" src="img/author/robert-3.png" alt="img">
                                                    </div>
                                                    <span>Chris Barin </span>
                                                 </div>
                                              </td>
                                              <td>$15,354</td>
                                              <td>
                                                 <div class="status">
                                                    <ul>
                                                       <li>Wordpress</li>
                                                    </ul>
                                                 </div>
                                              </td>
                                              <td>
                                                 <div class="d-flex align-center justify-content-end">
                                                    <div class="progress-wrap mb-0">
                                                       <div class="progress">
                                                          <div class="progress-bar bg-secondary" role="progressbar" style="width: 92%;" aria-valuenow="92" aria-valuemin="0" aria-valuemax="100"></div>

                                                       </div>
                                                    </div>
                                                    <div class="ratio-percentage ms-10">92%</div>
                                                 </div>
                                              </td>
                                           </tr>
                                           <tr>
                                              <td>
                                                 <div class="selling-product-img d-flex align-items-center">
                                                    <div class="selling-product-img-wrapper order-bg-opacity-primary">
                                                       <img class="img-fluid" src="img/author/robert-4.png" alt="img">
                                                    </div>
                                                    <span>Daniel Pink</span>
                                                 </div>
                                              </td>
                                              <td>$12,354</td>
                                              <td>
                                                 <div class="status">
                                                    <ul>
                                                       <li>Photoshop</li>
                                                    </ul>
                                                 </div>
                                              </td>
                                              <td>
                                                 <div class="d-flex align-center justify-content-end">
                                                    <div class="progress-wrap mb-0">
                                                       <div class="progress">
                                                          <div class="progress-bar bg-warning" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>

                                                       </div>
                                                    </div>
                                                    <div class="ratio-percentage ms-10">25%</div>
                                                 </div>
                                              </td>
                                           </tr>
                                           <tr>
                                              <td>
                                                 <div class="selling-product-img d-flex align-items-center">
                                                    <div class="selling-product-img-wrapper order-bg-opacity-primary">
                                                       <img class="img-fluid" src="img/author/robert-5.png" alt="img">
                                                    </div>
                                                    <span>Shane Pollard</span>
                                                 </div>
                                              </td>
                                              <td>$12,354</td>
                                              <td>
                                                 <div class="status">
                                                    <ul>
                                                       <li>Illustrator</li>
                                                    </ul>
                                                 </div>
                                              </td>
                                              <td>
                                                 <div class="d-flex align-center justify-content-end">
                                                    <div class="progress-wrap mb-0">
                                                       <div class="progress">
                                                          <div class="progress-bar bg-primary" role="progressbar" style="width: 18%;" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100"></div>

                                                       </div>
                                                    </div>
                                                    <div class="ratio-percentage ms-10">18%</div>
                                                 </div>
                                              </td>
                                           </tr>
                                        </tbody>
                                     </table>
                                  </div>
                               </div>
                            </div>
                            <div class="tab-pane fade" id="t_selling-week22" role="tabpanel" aria-labelledby="t_selling-week22-tab">
                               <div class="selling-table-wrap selling-table-wrap--source selling-table-wrap--member">
                                  <div class="table-responsive">
                                     <table class="table table--default table-borderless">
                                        <tbody>
                                           <tr>
                                              <td>
                                                 <div class="selling-product-img d-flex align-items-center">
                                                    <div class="selling-product-img-wrapper order-bg-opacity-primary">
                                                       <img class="img-fluid" src="img/author/robert-1.png" alt="img">
                                                    </div>
                                                    <span>Robert Clinton</span>
                                                 </div>
                                              </td>
                                              <td>$38,536</td>
                                              <td>
                                                 <div class="status">
                                                    <ul>
                                                       <li>ReactJs</li>
                                                       <li>HTML</li>
                                                    </ul>
                                                 </div>
                                              </td>
                                              <td>
                                                 <div class="d-flex align-center justify-content-end">
                                                    <div class="progress-wrap mb-0">
                                                       <div class="progress">
                                                          <div class="progress-bar bg-primary" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>

                                                       </div>
                                                    </div>
                                                    <div class="ratio-percentage ms-10">80%</div>
                                                 </div>
                                              </td>
                                           </tr>
                                           <tr>
                                              <td>
                                                 <div class="selling-product-img d-flex align-items-center">
                                                    <div class="selling-product-img-wrapper order-bg-opacity-primary">
                                                       <img class="img-fluid" src="img/author/robert-2.png" alt="img">
                                                    </div>
                                                    <span>Member Progress</span>
                                                 </div>
                                              </td>
                                              <td>$20,573</td>
                                              <td>
                                                 <div class="status">
                                                    <ul>
                                                       <li>Laravel</li>
                                                       <li>Angular</li>
                                                    </ul>
                                                 </div>
                                              </td>
                                              <td>
                                                 <div class="d-flex align-center justify-content-end">
                                                    <div class="progress-wrap mb-0">
                                                       <div class="progress">
                                                          <div class="progress-bar bg-info" role="progressbar" style="width: 52%;" aria-valuenow="52" aria-valuemin="0" aria-valuemax="100"></div>

                                                       </div>
                                                    </div>
                                                    <div class="ratio-percentage ms-10">52%</div>
                                                 </div>
                                              </td>
                                           </tr>
                                           <tr>
                                              <td>
                                                 <div class="selling-product-img d-flex align-items-center">
                                                    <div class="selling-product-img-wrapper order-bg-opacity-primary">
                                                       <img class="img-fluid" src="img/author/robert-5.png" alt="img">
                                                    </div>
                                                    <span>Daniel White</span>
                                                 </div>
                                              </td>
                                              <td>$17,457</td>
                                              <td>
                                                 <div class="status">
                                                    <ul>
                                                       <li>Python</li>
                                                       <li>MySQL</li>
                                                    </ul>
                                                 </div>
                                              </td>
                                              <td>
                                                 <div class="d-flex align-center justify-content-end">
                                                    <div class="progress-wrap mb-0">
                                                       <div class="progress">
                                                          <div class="progress-bar bg-success" role="progressbar" style="width: 720%;" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>

                                                       </div>
                                                    </div>
                                                    <div class="ratio-percentage ms-10">72%</div>
                                                 </div>
                                              </td>
                                           </tr>
                                           <tr>
                                              <td>
                                                 <div class="selling-product-img d-flex align-items-center">
                                                    <div class="selling-product-img-wrapper order-bg-opacity-primary">
                                                       <img class="img-fluid" src="img/author/robert-3.png" alt="img">
                                                    </div>
                                                    <span>Chris Barin </span>
                                                 </div>
                                              </td>
                                              <td>$15,354</td>
                                              <td>
                                                 <div class="status">
                                                    <ul>
                                                       <li>Wordpress</li>
                                                    </ul>
                                                 </div>
                                              </td>
                                              <td>
                                                 <div class="d-flex align-center justify-content-end">
                                                    <div class="progress-wrap mb-0">
                                                       <div class="progress">
                                                          <div class="progress-bar bg-secondary" role="progressbar" style="width: 92%;" aria-valuenow="92" aria-valuemin="0" aria-valuemax="100"></div>

                                                       </div>
                                                    </div>
                                                    <div class="ratio-percentage ms-10">92%</div>
                                                 </div>
                                              </td>
                                           </tr>
                                           <tr>
                                              <td>
                                                 <div class="selling-product-img d-flex align-items-center">
                                                    <div class="selling-product-img-wrapper order-bg-opacity-primary">
                                                       <img class="img-fluid" src="img/author/robert-4.png" alt="img">
                                                    </div>
                                                    <span>Daniel Pink</span>
                                                 </div>
                                              </td>
                                              <td>$12,354</td>
                                              <td>
                                                 <div class="status">
                                                    <ul>
                                                       <li>Photoshop</li>
                                                    </ul>
                                                 </div>
                                              </td>
                                              <td>
                                                 <div class="d-flex align-center justify-content-end">
                                                    <div class="progress-wrap mb-0">
                                                       <div class="progress">
                                                          <div class="progress-bar bg-warning" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>

                                                       </div>
                                                    </div>
                                                    <div class="ratio-percentage ms-10">25%</div>
                                                 </div>
                                              </td>
                                           </tr>
                                           <tr>
                                              <td>
                                                 <div class="selling-product-img d-flex align-items-center">
                                                    <div class="selling-product-img-wrapper order-bg-opacity-primary">
                                                       <img class="img-fluid" src="img/author/robert-5.png" alt="img">
                                                    </div>
                                                    <span>Shane Pollard</span>
                                                 </div>
                                              </td>
                                              <td>$12,354</td>
                                              <td>
                                                 <div class="status">
                                                    <ul>
                                                       <li>Illustrator</li>
                                                    </ul>
                                                 </div>
                                              </td>
                                              <td>
                                                 <div class="d-flex align-center justify-content-end">
                                                    <div class="progress-wrap mb-0">
                                                       <div class="progress">
                                                          <div class="progress-bar bg-warning" role="progressbar" style="width: 18%;" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100"></div>

                                                       </div>
                                                    </div>
                                                    <div class="ratio-percentage ms-10">18%</div>
                                                 </div>
                                              </td>
                                           </tr>
                                        </tbody>
                                     </table>
                                  </div>
                               </div>
                            </div>

                            <div class="tab-pane fade" id="t_selling-month33" role="tabpanel" aria-labelledby="t_selling-month33-tab">
                               <div class="selling-table-wrap selling-table-wrap--source selling-table-wrap--member">
                                  <div class="table-responsive">
                                     <table class="table table--default table-borderless">
                                        <tbody>
                                           <tr>
                                              <td>
                                                 <div class="selling-product-img d-flex align-items-center">
                                                    <div class="selling-product-img-wrapper order-bg-opacity-primary">
                                                       <img class="img-fluid" src="img/author/robert-1.png" alt="img">
                                                    </div>
                                                    <span>Robert Clinton</span>
                                                 </div>
                                              </td>
                                              <td>$38,536</td>
                                              <td>
                                                 <div class="status">
                                                    <ul>
                                                       <li>ReactJs</li>
                                                       <li>HTML</li>
                                                    </ul>
                                                 </div>
                                              </td>
                                              <td>
                                                 <div class="d-flex align-center justify-content-end">
                                                    <div class="progress-wrap mb-0">
                                                       <div class="progress">
                                                          <div class="progress-bar bg-primary" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>

                                                       </div>
                                                    </div>
                                                    <div class="ratio-percentage ms-10">80%</div>
                                                 </div>
                                              </td>
                                           </tr>
                                           <tr>
                                              <td>
                                                 <div class="selling-product-img d-flex align-items-center">
                                                    <div class="selling-product-img-wrapper order-bg-opacity-primary">
                                                       <img class="img-fluid" src="img/author/robert-2.png" alt="img">
                                                    </div>
                                                    <span>Member Progress</span>
                                                 </div>
                                              </td>
                                              <td>$20,573</td>
                                              <td>
                                                 <div class="status">
                                                    <ul>
                                                       <li>Laravel</li>
                                                       <li>Angular</li>
                                                    </ul>
                                                 </div>
                                              </td>
                                              <td>
                                                 <div class="d-flex align-center justify-content-end">
                                                    <div class="progress-wrap mb-0">
                                                       <div class="progress">
                                                          <div class="progress-bar bg-info" role="progressbar" style="width: 52%;" aria-valuenow="52" aria-valuemin="0" aria-valuemax="100"></div>

                                                       </div>
                                                    </div>
                                                    <div class="ratio-percentage ms-10">52%</div>
                                                 </div>
                                              </td>
                                           </tr>
                                           <tr>
                                              <td>
                                                 <div class="selling-product-img d-flex align-items-center">
                                                    <div class="selling-product-img-wrapper order-bg-opacity-primary">
                                                       <img class="img-fluid" src="img/author/robert-5.png" alt="img">
                                                    </div>
                                                    <span>Daniel White</span>
                                                 </div>
                                              </td>
                                              <td>$17,457</td>
                                              <td>
                                                 <div class="status">
                                                    <ul>
                                                       <li>Python</li>
                                                       <li>MySQL</li>
                                                    </ul>
                                                 </div>
                                              </td>
                                              <td>
                                                 <div class="d-flex align-center justify-content-end">
                                                    <div class="progress-wrap mb-0">
                                                       <div class="progress">
                                                          <div class="progress-bar bg-success" role="progressbar" style="width: 72%;" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>

                                                       </div>
                                                    </div>
                                                    <div class="ratio-percentage ms-10">72%</div>
                                                 </div>
                                              </td>
                                           </tr>
                                           <tr>
                                              <td>
                                                 <div class="selling-product-img d-flex align-items-center">
                                                    <div class="selling-product-img-wrapper order-bg-opacity-primary">
                                                       <img class="img-fluid" src="img/author/robert-3.png" alt="img">
                                                    </div>
                                                    <span>Chris Barin </span>
                                                 </div>
                                              </td>
                                              <td>$15,354</td>
                                              <td>
                                                 <div class="status">
                                                    <ul>
                                                       <li>Wordpress</li>
                                                    </ul>
                                                 </div>
                                              </td>
                                              <td>
                                                 <div class="d-flex align-center justify-content-end">
                                                    <div class="progress-wrap mb-0">
                                                       <div class="progress">
                                                          <div class="progress-bar bg-secondary" role="progressbar" style="width: 92%;" aria-valuenow="92" aria-valuemin="0" aria-valuemax="100"></div>

                                                       </div>
                                                    </div>
                                                    <div class="ratio-percentage ms-10">92%</div>
                                                 </div>
                                              </td>
                                           </tr>
                                           <tr>
                                              <td>
                                                 <div class="selling-product-img d-flex align-items-center">
                                                    <div class="selling-product-img-wrapper order-bg-opacity-primary">
                                                       <img class="img-fluid" src="img/author/robert-4.png" alt="img">
                                                    </div>
                                                    <span>Daniel Pink</span>
                                                 </div>
                                              </td>
                                              <td>$12,354</td>
                                              <td>
                                                 <div class="status">
                                                    <ul>
                                                       <li>Photoshop</li>
                                                    </ul>
                                                 </div>
                                              </td>
                                              <td>
                                                 <div class="d-flex align-center justify-content-end">
                                                    <div class="progress-wrap mb-0">
                                                       <div class="progress">
                                                          <div class="progress-bar bg-warning" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>

                                                       </div>
                                                    </div>
                                                    <div class="ratio-percentage ms-10">25%</div>
                                                 </div>
                                              </td>
                                           </tr>
                                           <tr>
                                              <td>
                                                 <div class="selling-product-img d-flex align-items-center">
                                                    <div class="selling-product-img-wrapper order-bg-opacity-primary">
                                                       <img class="img-fluid" src="img/author/robert-5.png" alt="img">
                                                    </div>
                                                    <span>Shane Pollard</span>
                                                 </div>
                                              </td>
                                              <td>$12,354</td>
                                              <td>
                                                 <div class="status">
                                                    <ul>
                                                       <li>Illustrator</li>
                                                    </ul>
                                                 </div>
                                              </td>
                                              <td>
                                                 <div class="d-flex align-center justify-content-end">
                                                    <div class="progress-wrap mb-0">
                                                       <div class="progress">
                                                          <div class="progress-bar bg-primary" role="progressbar" style="width: 18%;" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100"></div>

                                                       </div>
                                                    </div>
                                                    <div class="ratio-percentage ms-10">18%</div>
                                                 </div>
                                              </td>
                                           </tr>
                                        </tbody>
                                     </table>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>

                </div>
                <div class="col-xxl-6 mb-25">

                   <div class="card border-0 px-25 pb-10 project-task-list--event">
                      <div class="card-header px-0 border-0">
                         <h6>Upcoming Events</h6>
                         <div class="card-extra me-1">
                            <ul class="card-tab-links nav-tabs nav" role="tablist">
                               <li>
                                  <a class="active" href="#t_selling-today2222" data-bs-toggle="tab" id="t_selling-today2222-tab" role="tab" aria-selected="true">Today</a>
                               </li>
                               <li>
                                  <a href="#t_selling-week2222" data-bs-toggle="tab" id="t_selling-week2222-tab" role="tab" aria-selected="true">Week</a>
                               </li>
                               <li>
                                  <a href="#t_selling-month3333" data-bs-toggle="tab" id="t_selling-month3333-tab" role="tab" aria-selected="true">Month</a>
                               </li>
                            </ul>
                         </div>
                      </div>
                      <div class="card-body p-0">
                         <div class="tab-content">
                            <div class="tab-pane fade active show" id="t_selling-today2222" role="tabpanel" aria-labelledby="t_selling-today2222-tab">
                               <div class="project-task table-responsive table-responsive--dynamic">
                                  <table class="table table-borderless">
                                     <tbody>

                                        <tr class="project-task-list">
                                           <td>
                                              <div class="event-Wrapper">
                                                 <div class="event-Wrapper__left">
                                                    <div class="event-wrapper-item bg-primary">
                                                       19 March
                                                    </div>
                                                 </div>
                                                 <div class="event-Wrapper__right">
                                                    <h6>Planning for new dashboard wireframe and prototype design</h6>
                                                    <span>08:30 AM</span>
                                                 </div>
                                              </div>
                                           </td>
                                           <td>
                                              <div class="dropdown dropleft">
                                                 <a href="#" class="btn-link" role="button" id="Today" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <img src="img/svg/more-horizontal.svg" alt="more-horizontal" class="svg">
                                                 </a>
                                                 <div class="dropdown-menu dropdown-menu--dynamic" aria-labelledby="Today">
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                 </div>
                                              </div>
                                           </td>
                                        </tr>


                                        <tr class="project-task-list">
                                           <td>
                                              <div class="event-Wrapper">
                                                 <div class="event-Wrapper__left">
                                                    <div class="event-wrapper-item bg-secondary">
                                                       18 March
                                                    </div>
                                                 </div>
                                                 <div class="event-Wrapper__right">
                                                    <h6>International Web Conference 2021</h6>
                                                    <span>08:30 AM</span>
                                                 </div>
                                              </div>
                                           </td>
                                           <td>
                                              <div class="dropdown dropleft">
                                                 <a href="#" class="btn-link" role="button" id="Today" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <img src="img/svg/more-horizontal.svg" alt="more-horizontal" class="svg">
                                                 </a>
                                                 <div class="dropdown-menu dropdown-menu--dynamic" aria-labelledby="Today">
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                 </div>
                                              </div>
                                           </td>
                                        </tr>


                                        <tr class="project-task-list">
                                           <td>
                                              <div class="event-Wrapper">
                                                 <div class="event-Wrapper__left">
                                                    <div class="event-wrapper-item bg-info">
                                                       17 March
                                                    </div>
                                                 </div>
                                                 <div class="event-Wrapper__right">
                                                    <h6>Dribble Designer Meetup</h6>
                                                    <span>08:30 AM</span>
                                                 </div>
                                              </div>
                                           </td>
                                           <td>
                                              <div class="dropdown dropleft">
                                                 <a href="#" class="btn-link" role="button" id="Today" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <img src="img/svg/more-horizontal.svg" alt="more-horizontal" class="svg">
                                                 </a>
                                                 <div class="dropdown-menu dropdown-menu--dynamic" aria-labelledby="Today">
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                 </div>
                                              </div>
                                           </td>
                                        </tr>


                                        <tr class="project-task-list">
                                           <td>
                                              <div class="event-Wrapper">
                                                 <div class="event-Wrapper__left">
                                                    <div class="event-wrapper-item bg-warning">
                                                       16 March
                                                    </div>
                                                 </div>
                                                 <div class="event-Wrapper__right">
                                                    <h6>International Web Conference 2021</h6>
                                                    <span>08:30 AM</span>
                                                 </div>
                                              </div>
                                           </td>
                                           <td>
                                              <div class="dropdown dropleft">
                                                 <a href="#" class="btn-link" role="button" id="Today" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <img src="img/svg/more-horizontal.svg" alt="more-horizontal" class="svg">
                                                 </a>
                                                 <div class="dropdown-menu dropdown-menu--dynamic" aria-labelledby="Today">
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                 </div>
                                              </div>
                                           </td>
                                        </tr>

                                     </tbody>
                                  </table>
                               </div>
                            </div>
                            <div class="tab-pane fade" id="t_selling-week2222" role="tabpanel" aria-labelledby="t_selling-week2222-tab">
                               <div class="project-task table-responsive table-responsive--dynamic">
                                  <table class="table table-borderless">
                                     <tbody>

                                        <tr class="project-task-list">
                                           <td>
                                              <div class="event-Wrapper">
                                                 <div class="event-Wrapper__left">
                                                    <div class="event-wrapper-item bg-primary">
                                                       19 March
                                                    </div>
                                                 </div>
                                                 <div class="event-Wrapper__right">
                                                    <h6>Planning for new dashboard wireframe and prototype design</h6>
                                                    <span>08:30 AM</span>
                                                 </div>
                                              </div>
                                           </td>
                                           <td>
                                              <div class="dropdown dropleft">
                                                 <a href="#" class="btn-link" role="button" id="Today" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <img src="img/svg/more-horizontal.svg" alt="more-horizontal" class="svg">
                                                 </a>
                                                 <div class="dropdown-menu dropdown-menu--dynamic" aria-labelledby="Today">
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                 </div>
                                              </div>
                                           </td>
                                        </tr>


                                        <tr class="project-task-list">
                                           <td>
                                              <div class="event-Wrapper">
                                                 <div class="event-Wrapper__left">
                                                    <div class="event-wrapper-item bg-secondary">
                                                       18 March
                                                    </div>
                                                 </div>
                                                 <div class="event-Wrapper__right">
                                                    <h6>International Web Conference 2021</h6>
                                                    <span>08:30 AM</span>
                                                 </div>
                                              </div>
                                           </td>
                                           <td>
                                              <div class="dropdown dropleft">
                                                 <a href="#" class="btn-link" role="button" id="Today" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <img src="img/svg/more-horizontal.svg" alt="more-horizontal" class="svg">
                                                 </a>
                                                 <div class="dropdown-menu dropdown-menu--dynamic" aria-labelledby="Today">
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                 </div>
                                              </div>
                                           </td>
                                        </tr>


                                        <tr class="project-task-list">
                                           <td>
                                              <div class="event-Wrapper">
                                                 <div class="event-Wrapper__left">
                                                    <div class="event-wrapper-item bg-info">
                                                       17 March
                                                    </div>
                                                 </div>
                                                 <div class="event-Wrapper__right">
                                                    <h6>Dribble Designer Meetup</h6>
                                                    <span>08:30 AM</span>
                                                 </div>
                                              </div>
                                           </td>
                                           <td>
                                              <div class="dropdown dropleft">
                                                 <a href="#" class="btn-link" role="button" id="Today" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <img src="img/svg/more-horizontal.svg" alt="more-horizontal" class="svg">
                                                 </a>
                                                 <div class="dropdown-menu dropdown-menu--dynamic" aria-labelledby="Today">
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                 </div>
                                              </div>
                                           </td>
                                        </tr>


                                        <tr class="project-task-list">
                                           <td>
                                              <div class="event-Wrapper">
                                                 <div class="event-Wrapper__left">
                                                    <div class="event-wrapper-item bg-warning">
                                                       16 March
                                                    </div>
                                                 </div>
                                                 <div class="event-Wrapper__right">
                                                    <h6>International Web Conference 2021</h6>
                                                    <span>08:30 AM</span>
                                                 </div>
                                              </div>
                                           </td>
                                           <td>
                                              <div class="dropdown dropleft">
                                                 <a href="#" class="btn-link" role="button" id="Today" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <img src="img/svg/more-horizontal.svg" alt="more-horizontal" class="svg">
                                                 </a>
                                                 <div class="dropdown-menu dropdown-menu--dynamic" aria-labelledby="Today">
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                 </div>
                                              </div>
                                           </td>
                                        </tr>

                                     </tbody>
                                  </table>
                               </div>
                            </div>
                            <div class="tab-pane fade" id="t_selling-month3333" role="tabpanel" aria-labelledby="t_selling-month3333-tab">
                               <div class="project-task table-responsive table-responsive--dynamic">
                                  <table class="table table-borderless">
                                     <tbody>

                                        <tr class="project-task-list">
                                           <td>
                                              <div class="event-Wrapper">
                                                 <div class="event-Wrapper__left">
                                                    <div class="event-wrapper-item bg-primary">
                                                       19 March
                                                    </div>
                                                 </div>
                                                 <div class="event-Wrapper__right">
                                                    <h6>Planning for new dashboard wireframe and prototype design</h6>
                                                    <span>08:30 AM</span>
                                                 </div>
                                              </div>
                                           </td>
                                           <td>
                                              <div class="dropdown dropleft">
                                                 <a href="#" class="btn-link" role="button" id="Today" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <img src="img/svg/more-horizontal.svg" alt="more-horizontal" class="svg">
                                                 </a>
                                                 <div class="dropdown-menu dropdown-menu--dynamic" aria-labelledby="Today">
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                 </div>
                                              </div>
                                           </td>
                                        </tr>


                                        <tr class="project-task-list">
                                           <td>
                                              <div class="event-Wrapper">
                                                 <div class="event-Wrapper__left">
                                                    <div class="event-wrapper-item bg-secondary">
                                                       18 March
                                                    </div>
                                                 </div>
                                                 <div class="event-Wrapper__right">
                                                    <h6>International Web Conference 2021</h6>
                                                    <span>08:30 AM</span>
                                                 </div>
                                              </div>
                                           </td>
                                           <td>
                                              <div class="dropdown dropleft">
                                                 <a href="#" class="btn-link" role="button" id="Today" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <img src="img/svg/more-horizontal.svg" alt="more-horizontal" class="svg">
                                                 </a>
                                                 <div class="dropdown-menu dropdown-menu--dynamic" aria-labelledby="Today">
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                 </div>
                                              </div>
                                           </td>
                                        </tr>


                                        <tr class="project-task-list">
                                           <td>
                                              <div class="event-Wrapper">
                                                 <div class="event-Wrapper__left">
                                                    <div class="event-wrapper-item bg-info">
                                                       17 March
                                                    </div>
                                                 </div>
                                                 <div class="event-Wrapper__right">
                                                    <h6>Dribble Designer Meetup</h6>
                                                    <span>08:30 AM</span>
                                                 </div>
                                              </div>
                                           </td>
                                           <td>
                                              <div class="dropdown dropleft">
                                                 <a href="#" class="btn-link" role="button" id="Today" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <img src="img/svg/more-horizontal.svg" alt="more-horizontal" class="svg">
                                                 </a>
                                                 <div class="dropdown-menu dropdown-menu--dynamic" aria-labelledby="Today">
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                 </div>
                                              </div>
                                           </td>
                                        </tr>


                                        <tr class="project-task-list">
                                           <td>
                                              <div class="event-Wrapper">
                                                 <div class="event-Wrapper__left">
                                                    <div class="event-wrapper-item bg-warning">
                                                       16 March
                                                    </div>
                                                 </div>
                                                 <div class="event-Wrapper__right">
                                                    <h6>International Web Conference 2021</h6>
                                                    <span>08:30 AM</span>
                                                 </div>
                                              </div>
                                           </td>
                                           <td>
                                              <div class="dropdown dropleft">
                                                 <a href="#" class="btn-link" role="button" id="Today" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <img src="img/svg/more-horizontal.svg" alt="more-horizontal" class="svg">
                                                 </a>
                                                 <div class="dropdown-menu dropdown-menu--dynamic" aria-labelledby="Today">
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                 </div>
                                              </div>
                                           </td>
                                        </tr>

                                     </tbody>
                                  </table>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>

                </div>
                <div class="col-xxl-4 mb-25">
                   <div class="card knowledge-base border-0 py-sm-30 px-sm-25">
                      <img src="img/book-open.png" alt="book">
                      <h1>Knowledge Base</h1>
                      <p>There are many variations of passages of Lorem Ipsum available
                         but the majority have suffered alteration</p>
                      <button type="button" class="btn btn-primary">
                         Browse Article
                      </button>
                   </div>
                </div>
                <div class="col-xxl-4 col-lg-6 mb-25">

                   <div class="card border-0 card-timeline h-100">
                      <div class="card-header border-0">
                         <h6>Timeline</h6>
                         <div class="card-extra">
                            <div class="dropdown dropleft">
                               <a href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <img src="img/svg/more-horizontal.svg" alt="more-horizontal" class="svg">
                               </a>
                               <div class="dropdown-menu">
                                  <a class="dropdown-item" href="#">Action</a>
                                  <a class="dropdown-item" href="#">Another action</a>
                                  <a class="dropdown-item" href="#">Something else here</a>
                               </div>
                            </div>
                         </div>
                      </div>
                      <!-- ends: .card-header -->
                      <div class="card-body pb-15 mt-n15 pt-0">
                         <div class="card-timeline-body">
                            <ul>
                               <li>
                                  <div class="card-timeline-body__left">
                                     <div class="card-timeline-body__title">
                                        <span class="timeline-line"></span>
                                        <span class="badge-dot badge-dot--big dot-primary"></span>
                                        <p>Create a services site<span>2015-09-01</span></p>
                                     </div>
                                  </div>
                                  <div class="card-timeline-body__right">
                                     <div class="card-timeline-body__time">
                                        <span>10 mins ago</span>
                                     </div>
                                  </div>
                               </li>
                               <li>
                                  <div class="card-timeline-body__left">
                                     <div class="card-timeline-body__title">
                                        <span class="timeline-line"></span>
                                        <span class="badge-dot badge-dot--big dot-secondary"></span>
                                        <p>Solve initial network problems<span>2015-09-01</span></p>
                                     </div>
                                  </div>
                                  <div class="card-timeline-body__right">
                                     <div class="card-timeline-body__time">
                                        <span>10 mins ago</span>
                                     </div>
                                  </div>
                               </li>
                               <li>
                                  <div class="card-timeline-body__left">
                                     <div class="card-timeline-body__title">
                                        <span class="timeline-line"></span>
                                        <span class="badge-dot badge-dot--big dot-success"></span>
                                        <p>Technical testing<span>2015-09-01</span></p>
                                     </div>
                                  </div>
                                  <div class="card-timeline-body__right">
                                     <div class="card-timeline-body__time">
                                        <span>10 mins ago</span>
                                     </div>
                                  </div>
                               </li>
                               <li>
                                  <div class="card-timeline-body__left">
                                     <div class="card-timeline-body__title">
                                        <span class="timeline-line"></span>
                                        <span class="badge-dot badge-dot--big dot-info"></span>
                                        <p>Network problems being solved<span>2015-09-01</span></p>
                                     </div>
                                  </div>
                                  <div class="card-timeline-body__right">
                                     <div class="card-timeline-body__time">
                                        <span>10 mins ago</span>
                                     </div>
                                  </div>
                               </li>
                               <li>
                                  <div class="card-timeline-body__left">
                                     <div class="card-timeline-body__title">
                                        <span class="timeline-line"></span>
                                        <span class="badge-dot badge-dot--big dot-warning"></span>
                                        <p>Technical testing<span>2015-09-01</span></p>
                                     </div>
                                  </div>
                                  <div class="card-timeline-body__right">
                                     <div class="card-timeline-body__time">
                                        <span>10 mins ago</span>
                                     </div>
                                  </div>
                               </li>
                               <li>
                                  <div class="card-timeline-body__left">
                                     <div class="card-timeline-body__title">
                                        <span class="timeline-line"></span>
                                        <span class="badge-dot badge-dot--big dot-danger"></span>
                                        <p>Network problems being solved<span>2015-09-01</span></p>
                                     </div>
                                  </div>
                                  <div class="card-timeline-body__right">
                                     <div class="card-timeline-body__time">
                                        <span>10 mins ago</span>
                                     </div>
                                  </div>
                               </li>
                            </ul>
                         </div>
                      </div>
                      <!-- ends: .card-body -->
                   </div>

                </div>
                <div class="col-xxl-4 col-lg-6 mb-25">

                   <div class="card border-0 card-inbox">
                      <div class="card-header border-0">
                         <h6>Inbox</h6>
                         <div class="dropdown dropleft">
                            <a href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               <img src="img/svg/more-horizontal.svg" alt="more-horizontal" class="svg">
                            </a>
                            <div class="dropdown-menu">
                               <a class="dropdown-item" href="#">Action</a>
                               <a class="dropdown-item" href="#">Another action</a>
                               <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                         </div>
                      </div>
                      <!-- ends: .card-header -->
                      <div class="card-body pb-35 pt-0">
                         <div class="card-inbox-members">
                            <ul>
                               <li>
                                  <div class="card-inbox-members__left">
                                     <img class="radius-sm" src="img/inbox-1.png" alt="">
                                     <div class="card-inbox-members__title">
                                        <h6>Shane Watson</h6>
                                        <div class="card-inbox-members__title--online">
                                           We are looking a full stack developer
                                        </div>
                                     </div>
                                  </div>
                                  <div class="card-inbox-member__right">
                                     <div class="card-inbox-member__time">
                                        <span>9:30 AM</span>
                                     </div>
                                  </div>
                               </li>
                               <li>
                                  <div class="card-inbox-members__left">
                                     <img class="radius-sm" src="img/inbox-2.png" alt="">
                                     <div class="card-inbox-members__title">
                                        <h6>Chris Dohan</h6>
                                        <div class="card-inbox-members__title--online">
                                           Well done, great work
                                        </div>
                                     </div>
                                  </div>
                                  <div class="card-inbox-member__right">
                                     <div class="card-inbox-member__time">
                                        <span>9:30 AM</span>
                                     </div>
                                  </div>
                               </li>
                               <li>
                                  <div class="card-inbox-members__left">
                                     <img class="radius-sm" src="img/inbox-3.png" alt="">
                                     <div class="card-inbox-members__title">
                                        <h6>Robert Clinton</h6>
                                        <div class="card-inbox-members__title--online">
                                           Tonight we are going to submit new...
                                        </div>
                                     </div>
                                  </div>
                                  <div class="card-inbox-member__right">
                                     <div class="card-inbox-member__time">
                                        <span>9:30 AM</span>
                                     </div>
                                  </div>
                               </li>
                               <li>
                                  <div class="card-inbox-members__left">
                                     <img class="radius-sm" src="img/inbox-1.png" alt="">
                                     <div class="card-inbox-members__title">
                                        <h6>Shane Watson</h6>
                                        <div class="card-inbox-members__title--online">
                                           We are looking a full stack developer
                                        </div>
                                     </div>
                                  </div>
                                  <div class="card-inbox-member__right">
                                     <div class="card-inbox-member__time">
                                        <span>9:30 AM</span>
                                     </div>
                                  </div>
                               </li>
                               <li>
                                  <div class="card-inbox-members__left">
                                     <img class="radius-sm" src="img/inbox-2.png" alt="">
                                     <div class="card-inbox-members__title">
                                        <h6>Chris Dohan</h6>
                                        <div class="card-inbox-members__title--online">
                                           Well done, great work
                                        </div>
                                     </div>
                                  </div>
                                  <div class="card-inbox-member__right">
                                     <div class="card-inbox-member__time">
                                        <span>9:30 AM</span>
                                     </div>
                                  </div>
                               </li>
                            </ul>
                         </div>
                      </div>
                      <!-- ends: .card-body -->
                   </div>

                </div>
                <div class="col-xxl-4 col-lg-6 mb-25">

                   <div class="blog-card">
                      <div class="blog-card__thumbnail">
                         <a href="#">
                            <img src="img/bg3.png" alt="">
                         </a>
                      </div>
                      <div class="blog-card__details">
                         <div class="blog-card__content">
                            <div class="blog-card__title--top">15 March 2021</div>
                            <h4 class="blog-card__title">
                               <a href="#" class="entry-title" rel="bookmark">Multiple Dashboard Design Idea</a>
                            </h4>
                            <p>There are many variations of passages of majority have suffered alteration in some form</p>
                         </div>
                         <div class="blog-card__meta">
                            <div class="blog-card__meta-profile">
                               <img src="img/alex-suprun.png" alt="">
                               <span>Machel Bold</span>
                            </div>
                            <div class="blog-card__meta-count">
                               <ul>
                                  <li>
                                     <div class="blog-card__meta-reaction">
                                        <img src="img/svg/heart.svg" alt="heart" class="svg">
                                        <span class="blog-card__meta-reaction-like">15 K</span>
                                     </div>
                                  </li>
                                  <li>
                                     <div class="blog-card__meta-doc-wrapper">
                                        <img src="img/svg/file-text.svg" alt="file-text" class="svg">
                                        <span class="blog-card__meta-doc">75</span>
                                     </div>
                                  </li>
                               </ul>
                            </div>
                         </div>
                      </div>
                   </div>

                </div>
                <div class="col-xxl-4 col-lg-6 mb-25">

                   <div class="blog-card">
                      <div class="blog-card__thumbnail">
                         <a href="#">
                            <img src="img/bg2.png" alt="">
                         </a>
                      </div>
                      <div class="blog-card__details">
                         <div class="blog-card__content">
                            <div class="blog-card__title--top">15 March 2021</div>
                            <h4 class="blog-card__title">
                               <a href="#" class="entry-title" rel="bookmark">How to Create a Niche Based Dashboard</a>
                            </h4>
                            <p>There are many variations of passages of majority have suffered alteration in some form</p>
                         </div>
                         <div class="blog-card__meta">
                            <div class="blog-card__meta-profile">
                               <img src="img/alex-suprun.png" alt="">
                               <span>Machel Bold</span>
                            </div>
                            <div class="blog-card__meta-count">
                               <ul>
                                  <li>
                                     <div class="blog-card__meta-reaction">
                                        <img src="img/svg/heart.svg" alt="heart" class="svg">
                                        <span class="blog-card__meta-reaction-like">15 K</span>
                                     </div>
                                  </li>
                                  <li>
                                     <div class="blog-card__meta-doc-wrapper">
                                        <img src="img/svg/file-text.svg" alt="file-text" class="svg">
                                        <span class="blog-card__meta-doc">75</span>
                                     </div>
                                  </li>
                               </ul>
                            </div>
                         </div>
                      </div>
                   </div>

                </div>
                <div class="col-xxl-4 col-lg-6 mb-25">

                   <div class="blog-card">
                      <div class="blog-card__thumbnail">
                         <a href="#">
                            <img src="img/bg4.png" alt="">
                         </a>
                      </div>
                      <div class="blog-card__details">
                         <div class="blog-card__content">
                            <div class="blog-card__title--top">15 March 2021</div>
                            <h4 class="blog-card__title">
                               <a href="#" class="entry-title" rel="bookmark">Tips for Design Simplicity </a>
                            </h4>
                            <p>There are many variations of passages of majority have suffered alteration in some form</p>
                         </div>
                         <div class="blog-card__meta">
                            <div class="blog-card__meta-profile">
                               <img src="img/alex-suprun.png" alt="">
                               <span>Machel Bold</span>
                            </div>
                            <div class="blog-card__meta-count">
                               <ul>
                                  <li>
                                     <div class="blog-card__meta-reaction">
                                        <img src="img/svg/heart.svg" alt="heart" class="svg">
                                        <span class="blog-card__meta-reaction-like">15 K</span>
                                     </div>
                                  </li>
                                  <li>
                                     <div class="blog-card__meta-doc-wrapper">
                                        <img src="img/svg/file-text.svg" alt="file-text" class="svg">
                                        <span class="blog-card__meta-doc">75</span>
                                     </div>
                                  </li>
                               </ul>
                            </div>
                         </div>
                      </div>
                   </div>

                </div>
             </div>
             <!-- ends: .row -->
          </div>
       </div>

    </div>

 </main>

@include('layouts.footer')

 <div id="overlayer">
    <div class="loader-overlay">
       <div class="dm-spin-dots spin-lg">
          <span class="spin-dot badge-dot dot-primary"></span>
          <span class="spin-dot badge-dot dot-primary"></span>
          <span class="spin-dot badge-dot dot-primary"></span>
          <span class="spin-dot badge-dot dot-primary"></span>
       </div>
    </div>
 </div>

 <div class="overlay-dark-sidebar"></div>
@endsection
