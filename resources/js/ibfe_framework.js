import './app'

class ie_Caroussel {
    $c_item = {};
    $items = [];
    $interval = 0;

    constructor(e) {
        const $el = $(e)
        this.$c_item = 0;
        this.$items = $el.find('.ie-item');
        this.$interval = $el.attr('data-ie-caroussel-switch-time') || 2000;
    }

    nextSlide() {
        const prevItem = this.$items.eq(this.$c_item);
        this.$c_item = (this.$c_item + 1) % this.$items.length;
        const nextItem = this.$items.eq(this.$c_item);
        
        prevItem.removeClass('active');
        nextItem.addClass('active');
    }

    start() {
        this.nextSlide()
        setInterval(() => {
            this.nextSlide();
        }, this.$interval);
    }
}
document.addEventListener('DOMContentLoaded', function () {
    try {
        $(".ie-caroussel").each(function () {
            let u_ca = new ie_Caroussel(this)
            u_ca.start()
        })
    }
    catch (e) {
        console.log("ERRO!: ")
        console.log(e)
    }
})