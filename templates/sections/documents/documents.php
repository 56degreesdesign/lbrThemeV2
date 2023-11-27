<?php
    $section = $args['data'] ?? false;
?>
<div class="min-w-screen h-screen animated fadeIn faster fixed left-0 top-0 flex justify-center items-center inset-0 z-50 outline-none focus:outline-none bg-no-repeat bg-center bg-cover" id="modal-id">
    <div class="absolute bg-black opacity-20 inset-0 z-0"></div>
    <div class="w-[250px] px-3.5 py-7 relative mx-auto my-auto shadow-lg bg-orange | lg:w-[700px] lg:px-7 | xl:px-12 xl:py-12 xl:w-[970px]">
        <div class="cursor-pointer absolute top-7 right-3.5 | xl:top-8 xl:right-8">
            <svg xmlns="http://www.w3.org/2000/svg" width="13.608" height="13.608" viewBox="0 0 13.608 13.608">
                <g id="Group_126658" data-name="Group 126658" transform="translate(-1398.694 -957.096)">
                    <path id="Path_129847" data-name="Path 129847" d="M4728,7319.245h18.245" transform="translate(-7119.641 -861.936) rotate(-45)" fill="none" stroke="#000" stroke-width="1"/>
                    <path id="Path_129848" data-name="Path 129848" d="M0,0H18.245" transform="translate(1411.949 970.351) rotate(-135)" fill="none" stroke="#000" stroke-width="1"/>
                </g>
            </svg>
        </div>
        <div class="grid lg:grid-cols-2 lg:gap-x-7 xl:gap-x-24">
            <div class="border-b border-black pb-7 mb-7 form-documents-login | lg:border-0">
                <h4 class="txt-h4 mb-4 | xl:mb-9">Nice to see you again.<br>
                    Please login below.</h4>
                <form>
                    <input type="text" placeholder="USERNAME" required />
                    <input type="password" placeholder="PASSWORD" required /> 
                    <button class="mt-3.5 btn btn--black btn--mobile-wide btn--desktop-small | xl:mt-10">Enter</button>
                </form>
            </div>
            <div class="form-documents-submit lg:-order-1">
                <h4 class="txt-h4 mb-4 | xl:mb-9">Property owners please<br>
                    contact us for full access.</h4>
                <form>
                    <input type="text" placeholder="FULL NAME *" required />
                    <input type="text" placeholder="Purchased lot *" required />
                    <input type="email" placeholder="EMAIL *" required />
                    <button class="mt-3.5 btn btn--black btn--mobile-wide btn--desktop-small | xl:mt-10">SUBMIT</button>
                </form>
            </div>
        </div>
    </div>
</div>

<section class="bg-beige pt-28 pb-24 | xl:pt-48 xl:pb-0">
    <div class="container grid-layout">
        <div class="col-span-full mb-11 | lg:mb-0 lg:col-span-6">
            <div class="text-center | lg:w-2/3 lg:text-left">
                <h1 class="txt-h2 mb-6 | lg:mb-16">PURCHASER
                    DOCUMENTS</h1>
                <div class="wysiwyg">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sagittis metus nec nisi vehicula, sit amet vestibulum magna congue. Curabitur lobortis sed massa ut consectetur.</p>
                </div>
            </div>
        </div>
        <div class="col-span-full lg:col-span-6">
            <div class="hidden | lg:block">
                <h6 class="txt-h4 border-b border-black pb-4 xl:pb-6">SALES DOCUMENTS</h6>
                <div class="wysiwyg pt-14 pb-16 | xl:pt-16 xl:pb-28">
                    <p class="md:mb-5 xl:mb-7"><a href="" class="txt-link-orange">FULL SITE PLAN</a></p>
                    <p class="md:mb-5 xl:mb-7"><a href="" class="txt-link-orange">FULL SITE PLAN</a></p>
                    <p class="md:mb-5 xl:mb-7"><a href="" class="txt-link-orange">FULL SITE PLAN</a></p>
                    <p class="md:mb-5 xl:mb-7 last:mb-0"><a href="" class="txt-link-orange">FULL SITE PLAN</a></p>
                </div>
                <h6 class="txt-h4 border-b border-black pb-4 xl:pb-6">PROPERTY OWNERS ASSOCIATION</h6>
                <div class="wysiwyg pt-14 pb-16 | xl:pt-16 xl:pb-28">
                    <p class="md:mb-5 xl:mb-7"><a href="" class="txt-link-orange txt-link-orange--block">FULL SITE PLAN</a></p>
                    <p class="md:mb-5 xl:mb-7"><a href="" class="txt-link-orange">FULL SITE PLAN</a></p>
                    <p class="md:mb-5 xl:mb-7"><a href="" class="txt-link-orange">FULL SITE PLAN</a></p>
                    <p class="md:mb-5 xl:mb-7 last:mb-0"><a href="" class="txt-link-orange">FULL SITE PLAN</a></p>
                </div>
            </div>
            <div class="accordion-list border-t border-orange lg:hidden">
                <button class="accordion-list-button w-full flex justify-between py-6">
                    <h6 class="txt-3">SALES DOCUMENTS</h6>
                    <svg class="" xmlns="http://www.w3.org/2000/svg" width="18.406" height="18.406" viewBox="0 0 18.406 18.406">
                        <g id="Group_127238" data-name="Group 127238" transform="translate(-271.5 -2280.5)">
                            <path id="Path_130178" data-name="Path 130178" d="M-6613,11963.164h18.406" transform="translate(6884.501 -9673.664)" fill="none" stroke="#cc885d" stroke-width="1"/>
                            <path id="Path_130179" data-name="Path 130179" d="M-6613,11963.164h18.406" transform="translate(-11682.664 -4314.095) rotate(-90)" fill="none" stroke="#cc885d" stroke-width="1"/>
                        </g>
                    </svg>
                </button>
                <div class="accordion-list-content accordion-list-content__no-gradient w-full border-b border-orange">
                    <div class="overflow-hidden wysiwyg pt-5 pb-11">
                        <p class="mb-3.5"><a href="" class="txt-link-orange txt-link-orange--block">FULL SITE PLAN</a></p>
                        <p class="mb-3.5"><a href="" class="txt-link-orange">FULL SITE PLAN</a></p>
                        <p class="mb-3.5"><a href="" class="txt-link-orange">FULL SITE PLAN</a></p>
                        <p class="mb-3.5 last:mb-0"><a href="" class="txt-link-orange">FULL SITE PLAN</a></p>
                    </div>
                </div>
                <button class="accordion-list-button w-full flex justify-between py-6">
                    <h6 class="txt-3">PROPERTY OWNERS ASSOCIATION</h6>
                    <svg class="" xmlns="http://www.w3.org/2000/svg" width="18.406" height="18.406" viewBox="0 0 18.406 18.406">
                        <g id="Group_127238" data-name="Group 127238" transform="translate(-271.5 -2280.5)">
                            <path id="Path_130178" data-name="Path 130178" d="M-6613,11963.164h18.406" transform="translate(6884.501 -9673.664)" fill="none" stroke="#cc885d" stroke-width="1"/>
                            <path id="Path_130179" data-name="Path 130179" d="M-6613,11963.164h18.406" transform="translate(-11682.664 -4314.095) rotate(-90)" fill="none" stroke="#cc885d" stroke-width="1"/>
                        </g>
                    </svg>
                </button>
                <div class="accordion-list-content accordion-list-content__no-gradient w-full border-t border-orange" style="max-height: 0px;">
                    <div class="overflow-hidden pb-10 pt-14 wysiwyg">
                        <a href="">FULL SITE PLAN</a>
                    </div>
                </div>
                <button class="accordion-list-button w-full flex justify-between py-6">
                    <h6 class="txt-3">TECHNICAL DOCUMENTS</h6>
                    <svg class="" xmlns="http://www.w3.org/2000/svg" width="18.406" height="18.406" viewBox="0 0 18.406 18.406">
                        <g id="Group_127238" data-name="Group 127238" transform="translate(-271.5 -2280.5)">
                            <path id="Path_130178" data-name="Path 130178" d="M-6613,11963.164h18.406" transform="translate(6884.501 -9673.664)" fill="none" stroke="#cc885d" stroke-width="1"/>
                            <path id="Path_130179" data-name="Path 130179" d="M-6613,11963.164h18.406" transform="translate(-11682.664 -4314.095) rotate(-90)" fill="none" stroke="#cc885d" stroke-width="1"/>
                        </g>
                    </svg>
                </button>
                <div class="accordion-list-content accordion-list-content__no-gradient w-full border-t border-orange" style="max-height: 0px;">
                    <div class="overflow-hidden pb-10 pt-14 wysiwyg">
                        <a href="">FULL SITE PLAN</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>