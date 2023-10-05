<style>
    .section_padding_140 {
        padding-top: 110px;
        padding-bottom: 110px;
    }

    .faq_area {
        position: relative;
        z-index: 1;
        /* background-color: #f5f5ff; */
    }

    .logo img {
        height: 100px;
        width: auto;
    }

    .faq-accordian {
        position: relative;
        z-index: 1;
    }

    .faq-accordian .card {
        position: relative;
        z-index: 1;
        margin-bottom: 1.5rem;
    }

    .faq-accordian .card:last-child {
        margin-bottom: 0;
    }

    .faq-accordian .card .card-header {
        background-color: #ffffff;
        padding: 0;
        border-bottom-color: #ebebeb;

    }

    .faq-accordian .card .card-header h6 {
        cursor: pointer;
        padding: 1.75rem 2rem;
        color: #958164;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -ms-grid-row-align: center;
        align-items: center;
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        justify-content: space-between;
    }

    .faq-accordian .card .card-header h6 span {
        font-size: 1.5rem;
    }

    .faq-accordian .card .card-header h6.collapsed {
        color: #36250f;
        border-left: 4px solid #4B371C;
    }

    .faq-accordian .card .card-header h6.collapsed span {
        -webkit-transform: rotate(-180deg);
        transform: rotate(-180deg);
    }

    .faq-accordian .card .card-body {
        padding: 1.75rem 2rem;
    }

    .faq-accordian .card .card-body p:last-child {
        margin-bottom: 0;
    }

    .faq_area h1 {
        color: #4B371C;
    }

    .faq_area h1 span {
        background: #fea501;
        color: #fff;
        padding: 0 10px 0 10px;
        /* font-size: 30px; */
        border-radius: 10px;
    }

    @media only screen and (max-width: 575px) {
        .support-button p {
            font-size: 14px;
        }
    }

    .support-button i {
        color: #3f43fd;
        font-size: 1.25rem;
    }

    @media only screen and (max-width: 575px) {
        .support-button i {
            font-size: 1rem;
        }
    }

    .support-button a {
        text-transform: capitalize;
        color: #2ecc71;
    }

    @media only screen and (max-width: 575px) {
        .support-button a {
            font-size: 13px;
        }
    }
</style>

@include('landing_page.navbar')
<div class="faq_area section_padding_140" id="faq">
    <div class="container">
        <div class="row ">
            <div class="col-12 col-sm-8 col-lg-6">
                <!-- Section Heading-->
                <div class="section_heading wow fadeInUp mb-4" data-wow-delay="0.2s"
                    style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                    <h3>Frequently Asked Questions</h3>
                    <div class="line"></div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <!-- FAQ Area-->
            <div class="col-12 col-sm-10 col-lg-12" style="margin-left: 1rem;">
                <div class="accordion faq-accordian" id="faqAccordion">
                    @foreach ($faqs as $faq)
                        <div class="card border-0 wow fadeInUp" data-wow-delay="0.2s"
                            style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                            <div class="card-header" id="heading{{ $faq->id }}">
                                <h6 class="mb-0 collapsed " data-toggle="collapse" data-target="#collapse{{ $faq->id }}"
                                    aria-expanded="true" aria-controls="collapse{{ $faq->id }}">{!! $faq->question !!}<span class="lni-chevron-up"></span></h6>
                            </div>
                            <div class="collapse" id="collapse{{ $faq->id }}" aria-labelledby="heading{{ $faq->id }}"
                                data-parent="#faqAccordion">
                                <div class="card-body">
                                    <p>{!! ($faq->answer); !!}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>