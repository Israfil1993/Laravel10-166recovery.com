<div class="faqSection">
    <div class="faqHead">
        <div class="faqHeadTitle">Frequently Asked Questions</div>
        <div class="faqHeadText">Lorem ipsum dolor sit amet consectetur adipiscing eli mattis sit phasellus
            mollis sit aliquam sit nullam.</div>
    </div>
    <div class="faqTabs">
        <a href="#" class="faqTab active-faq general-faq" id="general-faq" onclick="showGeneralFAQ()">General</a>

    </div>
    <div class="faqAccordions">
        <div class="serviceAccordions" id="serviceFAQs">
            @foreach($faqs as $faq)

            <div class="accordionItem" >
                <button class="accordion">
                    {{ $faq->question }}
                    <svg class="plusIcon-Acc" xmlns="http://www.w3.org/2000/svg" width="15" height="14"
                         viewBox="0 0 15 14" fill="none">
                        <path d="M7.5 1V13" stroke="#6D758F" stroke-width="1.32353" stroke-linecap="round"
                              stroke-linejoin="round" />
                        <path d="M13.5 7H1.5" stroke="#6D758F" stroke-width="1.32353" stroke-linecap="round"
                              stroke-linejoin="round" />
                    </svg>
                    <svg class="closeIcon-Acc" xmlns="http://www.w3.org/2000/svg" width="11" height="12"
                         viewBox="0 0 11 12" fill="none">
                        <path d="M10.0502 1.4502L0.950195 10.5502" stroke="#6D758F" stroke-width="1.3"
                              stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M0.950195 1.4502L10.0502 10.5502" stroke="#6D758F" stroke-width="1.3"
                              stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
                <div class="panel">
                    <p>{!! $faq->answer !!}</p>
                </div>
            </div>
            @endforeach



        </div>


    </div>
</div>
