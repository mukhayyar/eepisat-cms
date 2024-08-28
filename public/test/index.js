initCustomCursorV2();
const scrambleCharacters = "XYZxyzabc0$€£"

function initCustomCursorV2() {

    const cursorObject = document.querySelector(".custom-cursor");
    const cursorPos = {
        x: window.innerWidth / 2,
        y: window.innerHeight / 2
    };
    const mousePos = {
        x: cursorPos.x,
        y: cursorPos.y
    };

    var cursorMoveSpeed = 0.25;
    var cursorDragSpeed = 0.25;
    var cursorSpeed = cursorMoveSpeed;
    var cursorActive = false;

    const xCursorSet = gsap.quickSetter(cursorObject, "x", "px");
    const yCursorSet = gsap.quickSetter(cursorObject, "y", "px");

    window.addEventListener("mousemove", e=> {
        mousePos.x = e.clientX;
        mousePos.y = e.clientY;
    }
    );

    gsap.ticker.add(customCursor);

    function customCursor() {
        if (!cursorActive) {
            const dt = 1.0 - Math.pow(1.0 - cursorSpeed, gsap.ticker.deltaRatio());
            cursorPos.x += (mousePos.x - cursorPos.x) * dt;
            cursorPos.y += (mousePos.y - cursorPos.y) * dt;
            xCursorSet(cursorPos.x);
            yCursorSet(cursorPos.y);
        }
    }

    // Flickity (update position on drag with Flickity)
    var flickityCursorCarousel = $('[data-flickity-slider-type]');

    flickityCursorCarousel.on('dragMove.flickity', function(e, mousemove) {

        mousePos.x = e.clientX;
        mousePos.y = e.clientY;
        cursorSpeed = cursorDragSpeed;
        // set Drag Speed

        gsap.to({}, 0.0, {
            onUpdate: function() {
                gsap.set(cursorObject, {
                    x: mousePos.x,
                    y: mousePos.y
                });
            }
        });

    });

    flickityCursorCarousel.on('dragEnd.flickity', function() {
        cursorActive = false;
        cursorSpeed = cursorMoveSpeed;
    });

    // Mouse Init
    $(document).on('mousemove', function() {
        if ($('[data-cursor-init]').attr('data-cursor-init') == 'false') {
            $('[data-cursor-init]').attr('data-cursor-init', 'true');
        }
    });

    // Normal Hover
    $('[data-cursor-bubble-text]').on('mouseenter', function() {
        $('[data-cursor-bubble]').attr('data-cursor-bubble', 'active');
        let dataCursorText = $(this).data('cursor-bubble-text');
        $('.custom-cursor').find('.cursor-bubble .cursor-text').text(dataCursorText);
        $('.custom-cursor').find('.cursor-bubble').attr('data-cursor-bubble-icon', $(this).data('cursor-bubble-icon'));

        gsap.to($('.custom-cursor').find('.cursor-bubble .cursor-text'), {
            duration: 0.6,
            scrambleText: {
                text: dataCursorText,
                speed: 1.2,
                chars: scrambleCharacters,
            }
        });
    });
    $('[data-cursor-bubble-text]').on('mouseleave', function() {
        $('[data-cursor-bubble]').attr('data-cursor-bubble', 'not-active');

        gsap.from($('.custom-cursor').find('.cursor-bubble .cursor-text'), {
            duration: 0.6,
            scrambleText: {
                text: "{original}",
                speed: 0.6,
                chars: scrambleCharacters,
            }
        });
    });

    // Check Flipped
    $('[data-cursor-bubble-position]').on('mouseenter', function() {
        if ($(this).attr('data-cursor-bubble-position') == 'right') {
            $('[data-cursor-bubble]').attr('data-cursor-bubble-position', 'left');
        } else if ($(this).attr('data-cursor-bubble-position') == 'top') {
            $('[data-cursor-bubble]').attr('data-cursor-bubble-position', 'top');
        } else {
            $('[data-cursor-bubble]').attr('data-cursor-bubble-position', 'right');
        }
    });

}