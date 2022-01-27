@extends('modules.master')
    @section('content')
  <style type="text/css">
  
  .b-shortcode-example
  {
    text-align: justify;
  }
  .b-app-with-img__item_text {
    padding: 10px 5px 10px 5px;
  }
  .is-fixed-header header {
        background: rgba(255, 255, 255, 1);
  }
     #popup {
            display:none;
            position:absolute;
            margin:0 auto;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 9999;
    }
</style>
<style>
  .table-data th {
    background: #ff9980;
    padding: 5px;
    color: #000000;
    border: #99bddc solid 1px;
    border-right: none;
    border-bottom: none;
    font-size: 14px;
  }
  
  .table-data td {
    border: #d26200 solid 1px;
    border-right: none;
    border-bottom: none;
    padding: 5px;
}

  .panel-default {
      border-color: rgb(233, 104, 46);
  }

  .panel-default > .panel-heading-faq{
      color: #ffffff;
      background-color: rgb(233, 104, 46);
      border-color: rgb(233, 104, 46);
  }
  
  
  
  a:hover {
      color : white;
}
  </style>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <style type="text/css">

 @media(max-width: 1024px)
  {
    .aicteLogo{
      display: none;

    }
  }
/*   @media(max-width: 1024px)
  {
    .head1{
      margin-right: -0px;

    }*/
</style>
<section id="contact" class="contact mt-5 pt-3">
  <div class="container mt-5 pt-3">

    <div class="section-title mt-5">
      <h2 data-aos="fade-up"> FAQS</h2>
    </div>

    <div class="justify-content-center">

    <div class="col-xl-12 col-lg-12" data-aos="fade-up">
      <div class="info-box">
        <h5 class="pt-3"> &nbsp;&nbsp;FAQS </h5><br/>
        <div class="panel-group" id="accordion">
              
          <div class="panel panel-default">
            <div class="panel-heading panel-heading-faq">
              <h3 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion"
                      href="#collapse1">What is GKS?</a>
                  </h3>
            </div>
            <div id="collapse1" class="panel-collapse collapse">
              <div class="panel-body">Gujarat Knowledge Society (GKS) is a society formed by the Government of Gujarat to prepare the youth for the knowledge based economy and society so as to stimulate creation of world class knowledge resources by developing new competencies in skills.
GKS is run by the Directorate of Technical Education, Education Department, Government of Gujarat.</div>
            </div>
          </div>
              
              
              
              
          <div class="panel panel-default">
            <div class="panel-heading panel-heading-faq">
              <h3 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion"
                      href="#collapse2">What are the Courses Offered by GKS?</a>
              </h3>
            </div>
            <div id="collapse2" class="panel-collapse collapse">
              <div class="panel-body"><p>GKS offers more than 102 Courses across the Gujarat State. The List is available at Courses Link page of GKS website: <a href=\http://www.gksgujarat.org\><strong>www.gksgujarat.org</strong></a></div>
            </div>
              </div>
              
              <div class="panel panel-default">
                <div class="panel-heading panel-heading-faq">
                  <h3 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion"
                      href="#collapse3">Who will provide the Training?</a>
                  </h3>
                </div>
                <div id="collapse3" class="panel-collapse collapse">
                  <div class="panel-body"><p>GKS Certified Training Partners selected after the rigorous process of selection will impart the training. The trainers of training partners are also evaluated by GKS.</p></div>
                </div>
              </div>
              
              
              <div class="panel panel-default">
                <div class="panel-heading panel-heading-faq">
                  <h3 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion"
                      href="#collapse4">Where I have to appear for exam?</a>
                  </h3>
                </div>
                <div id="collapse4" class="panel-collapse collapse">
                  <div class="panel-body"><p>Exam will be conducted at the end of course by the Assessment &amp; Certification Partner of GKS. The exams will be conducted online or offline. A government recognized certificate shall be issued to successful candidate.</p></div>
                </div>
              </div>



              <div class="panel panel-default">
                <div class="panel-heading panel-heading-faq">
                  <h3 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion"
                      href="#collapse5">Where can I get further information?</a>
                  </h3>
                </div>
                <div id="collapse5" class="panel-collapse collapse">
                  <div class="panel-body">
                    <p>You can visit www.gksgujarat.org, or you can approach the
                      near by training centers.</p>
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading panel-heading-faq">
                  <h3 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion"
                      href="#collapse6">What are the chances of employment after
                      the completion of course?</a>
                  </h3>
                </div>
                <div id="collapse6" class="panel-collapse collapse">
                  <div class="panel-body">
                    <p>The successful candidate can take part in the Job Fairs
                      being organized by GKS. The training provided is of direct
                      industrial importance so the chances of candidate getting
                      absorbed in industry increases substantially. GKS have tie up
                      with institution for the placement of candidates. The
                      training partners as well as the independent body appointed
                      by the GKS will look after the placement activity of GKS.</p>
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading panel-heading-faq">
                  <h3 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion"
                      href="#collapse7">Is there any extra cost involved?</a>
                  </h3>
                </div>
                <div id="collapse7" class="panel-collapse collapse">
                  <div class="panel-body">
                    <p>No, all the cost of booklets, examination fees, service tax, impact assessment are included into the course fee student is paying as given in the Table of Courses. No other payment is necessary.</p>
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading panel-heading-faq">
                  <h3 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion"
                      href="#collapse8">What is course of my choice is not available at GKS training centers?</a>
                  </h3>
                </div>
                <div id="collapse8" class="panel-collapse collapse">
                  <div class="panel-body">
                    <p>The batch timings shall be decided by center nodal officers, as per the convenience of all the students. The sessions can be adjusted 1 hour per day to 4 hours per day or only on weekends/weekdays, so as to complete the hours as indicated in table of courses against each course.</p>
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading panel-heading-faq">
                  <h3 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion"
                      href="#collapse9">Where can I get Student Registration form?</a>
                  </h3>
                </div>
                <div id="collapse9" class="panel-collapse collapse">
                  <div class="panel-body">
                    <p>Please contact nodal officers at the training centers to get student registration form along with fee Pay-In slips. The list of nodal officers with mobile numbers is available on www.gksgujarat.org</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
          <br/>
      </div>
    </div>
  </section><!-- End Contact Section -->
@endsection
