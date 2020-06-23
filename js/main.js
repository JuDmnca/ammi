

// Function to add and remove the page transition screen
function pageTransition() {

  var tl = gsap.timeline();
  tl.set('.loading-screen', { transformOrigin: "bottom left"});
  tl.to('.loading-screen', { duration: .5, scaleY: 1});
  tl.to('.loading-screen', { duration: .5, scaleY: 0, skewX: 0, transformOrigin: "top left", ease: "power1.out", delay: 1 });
}

// Function to animate the content of each page on enter
function contentAnimation() {

  var tl = gsap.timeline();
  tl.from('.is-animated', { duration: 1, translateY: 60, opacity: 0, stagger: 0.4 });
  tl.from('.fadein', { duration: 0.5, opacity: 0.9 });
}

$(function() {
  var textColor = 0;

  barba.init({
    sync: true,

    transitions: [{
      async leave(data) {
        const done = this.async();
        $('.loading-screen').removeClass('blue grey orange');
        if (data.current.url.href === 'https://a-mmi.herokuapp.com/project.php?id=1') {
          $('.loading-screen').css("background-color", "#279B94");
        }
        if (data.current.url.href === 'https://a-mmi.herokuapp.com/project.php?id=2') {
          $('.loading-screen').css("background-color", "grey");
        }
        if (data.current.url.href === 'https://a-mmi.herokuapp.com/project.php?id=3') {
          $('.loading-screen').css("background-color", "#D55000");
        }
        var nextColor = '';
        if (data.next.url.href === 'https://a-mmi.herokuapp.com/project.php?id=1') {
          nextColor = '#279B94';
        }
        if (data.next.url.href === 'https://a-mmi.herokuapp.com/project.php?id=2') {
          nextColor = 'grey';
        }
        if (data.next.url.href === 'https://a-mmi.herokuapp.com/project.php?id=3') {
          nextColor = '#D55000';
        }
        if (data.current.namespace === 'project' && data.next.namespace != 'project') || (data.current.namespace === 'home' && data.next.namespace != 'home') {
          textColor = 1;
          console.log('W2B');
        }

        pageTransition();
        await delay(1000);
        $('.loading-screen').css("background-color", nextColor);
        done();
      },

      async enter(data) {
        if (textColor == 1) {
          console.log('vecdz');
          $('body').removeClass('whitetext');
          textColor = 0;
        }
        contentAnimation();
      },

      async once(data) {
        contentAnimation();
      }

    }]
  });

});
