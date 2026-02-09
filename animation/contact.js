  gsap.from(".contactbanner-container",{
      y:-100,
      opacity:0,
      duration:0.5,
      scrollTrigger: {
        trigger: ".contactbanner-container",
        start: "top 80%",
        end: "bottom 20%",
        toggleActions: "play none none reverse"
      }
    });
  gsap.from(".description-container",{
      y:-100,
      opacity:0,
      duration:0.5,
      scrollTrigger: {
        trigger: ".description-container",
        start: "top 80%",
        end: "bottom 20%",
        toggleActions: "play none none reverse"
      }
    });
    gsap.from(".office-heading",{
      y:-100,
      opacity:0,
      duration:0.5,
      scrollTrigger: {
        trigger: ".office-heading",
        start: "top 80%",
        end: "bottom 20%",
        toggleActions: "play none none reverse"
      }
    });
    gsap.from(".office-info",{
      opacity:0,
      duration:0.5,
      scrollTrigger: {
        trigger: ".office-info",
        start: "top 80%",
        end: "bottom 20%",
        toggleActions: "play none none reverse"
      }
    });
    
     gsap.from(".map",{
      y:-200,
      opacity:0,
      duration:1,
      scrollTrigger: {
        trigger: ".map",
        start: "top 80%",
        end: "bottom 20%",
        toggleActions: "play none none reverse"
      }
    });
    gsap.from(".form-layout",{
      y:200,
      opacity:0,
      duration:1,
      scrollTrigger: {
        trigger: ".form-layout",
        start: "top 80%",
        end: "bottom 20%",
        toggleActions: "play none none reverse"
      }
    });