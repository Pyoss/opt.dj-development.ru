var poll = null
$(document).ready(function () {
    poll = {
        answers: {},
        current_question: 1,
        fading: false,
        done: false,
        first_questionDOM: $('#poll-question-1'),
        second_questionDOM: $('#poll-question-2'),
        third_questionDOM: $('#poll-question-3'),

        answer: function (){
            if (poll.fading || poll.done) return false
            $(".poll-questioner__answer").removeClass("selected");
            this.classList.add('selected')
            poll.answers[poll.current_question] = this
        },

        next_question: function () {
            if (poll.fading) return false
            if (poll.current_question === 1){
                if (!poll.answers[1] || poll.done) return false
                poll.fading = true
                poll.current_question = 2
                poll.first_questionDOM.fadeOut(function () {
                    poll.first_questionDOM.next().fadeIn()
                })
            } else if(poll.current_question === 2)  {
                if (!poll.answers[2] || poll.done) return false
                poll.fading = true
                poll.current_question = 3
                poll.second_questionDOM.fadeOut(function () {
                    poll.second_questionDOM.next().fadeIn()
                    document.querySelector('#poll-button').textContent = 'Отправить'
                }
                )
            } else {
                poll.done = true
                if (!poll.answers[3]) return false
                poll.fading = true
                poll.finalize()
            }
            setTimeout(function (){
                poll.fading = false
            }, 300)
        },
        finalize: function (){
            showTelPopup()
        }
    }
    $('#poll-button').click(poll.next_question)
    $('.poll-questioner__answer').click(poll.answer)
})