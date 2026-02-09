    gsap.from(".header", {
      y: -100,
      opacity: 0,
      duration: 1,
      scrollTrigger: {
        trigger: ".slider",
        start: "top 80%",
        end: "bottom 20%",
        toggleActions: "play none none reverse"
    }
    });
    gsap.from(".enquiry-heading",{
      y:-200,
      opacity:0,
      duration:1,
      scrollTrigger: {
        trigger: ".enquiry-heading",
        start: "top 80%",
        end: "bottom 20%",
        toggleActions: "play none none reverse"
      }
    });
    gsap.from(".form-container",{
      y:200,
      opacity:0,
      duration:1,
      scrollTrigger: {
        trigger: ".enquiry-heading",
        start: "top 80%",
        end: "bottom 20%",
        toggleActions: "play none none reverse"
      }
    });
    gsap.from(".pyramid-footer",{
      y:-200,
      opacity:0,
      duration:1,
      scrollTrigger: {
        trigger: ".pyramid-footer",
        start: "top 80%",
        end: "bottom 20%",
        toggleActions: "play none none reverse"
      }
    });
     gsap.from(".footer-bottom",{
      y:200,
      opacity:0,
      duration:1,
      scrollTrigger: {
        trigger: ".pyramid-footer",
        start: "top 80%",
        end: "bottom 20%",
        toggleActions: "play none none reset"
      }
    });
    