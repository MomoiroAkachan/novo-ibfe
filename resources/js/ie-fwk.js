import './app'

class ie_Carousel {
    $current_item = {};
    $items = [];
    $interval = 0;

    constructor(e) {
        const $element = $(e)
        this.$current_item = 0;
        this.$items = $element.find('.ie-item');
        this.$interval = $element.attr('data-ie-carousel-switch-time') || 2000;
    }

    nextSlide() {
        const prevItem = this.$items.eq(this.$current_item);
        this.$current_item = (this.$current_item + 1) % this.$items.length;
        const nextItem = this.$items.eq(this.$current_item);
        prevItem.removeClass('active');
        nextItem.addClass('active');
    }

    start() {
        this.nextSlide();
        setInterval(() => {
            this.nextSlide();
        }, this.$interval);
    }
}

document.addEventListener('DOMContentLoaded', function () {
    try {
        $(".ie-carousel").each(function () {
            let u_ca = new ie_Carousel(this)
            u_ca.start()
        })
    }
    catch (e) {
        console.log('Error: ' + e);
    }
})
