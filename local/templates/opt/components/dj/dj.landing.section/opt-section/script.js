$(document).ready(function (){
    $(".opt-section__button").on('click', function (){
        let section_id = this.dataset.sectionId
        $(".opt-section__button.active").removeClass('active')
        this.classList.add('active')
        $(".opt-section__details.active").fadeOut('fast', function (){
            this.classList.remove('active')
            let search_query = `div.opt-section__details[data-section-id='${section_id}']`

            let active_details = $(search_query)
            active_details.fadeIn('fast')
            active_details.addClass('active')
        })
    })
})