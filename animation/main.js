    gsap.from(".slider .content", {
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
    gsap.from(".box-container", {
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
    gsap.from(".feature-card",{
      y:200,
      opacity:0,
      duration:1,
      scrollTrigger: {
        trigger: ".features",
        start: "top 80%",
        end: "bottom 20%",
        toggleActions: "play none none reverse"
      },
      stagger: 0.2
    });
    gsap.from(".ongoingpro-heading", {
      y: 100,
      opacity: 0, 
      duration: 1,
      scrollTrigger: {
        trigger: ".ongoingpro-heading",
        start: "top 80%",
        end: "bottom 20%",
        toggleActions: "play none none reverse"
      }
    });
    gsap.from(".ongoingpro-card",{
      y:200,
      opacity:0,
      duration:1,
      scrollTrigger: {
        trigger: ".ongoingpro-card",
        start: "top 80%",
        end: "bottom 20%",
        toggleActions: "play none none reverse"
      },
      stagger: 0.2
    });
    gsap.from(".offer-heading", {
      y: 100,
      opacity: 0, 
      duration: 1,
      scrollTrigger: {
        trigger: ".offer-heading",
        start: "top 80%",
        end: "bottom 20%",
        toggleActions: "play none none reverse"
      }
    });
    
     gsap.from(".offer-card",{
      y:200,
      opacity:0,
      duration:1,
      scrollTrigger: {
        trigger: ".offer-card",
        start: "top 80%",
        end: "bottom 20%",
        toggleActions: "play none none reverse"
      },
      stagger: 0.2
    });
     gsap.from(".need-card",{
      y:200,
      opacity:0,
      duration:1,
      scrollTrigger: {
        trigger: ".need-card",
        start: "top 80%",
        end: "bottom 20%",
        toggleActions: "play none none reverse"
      },
      stagger: 0.2
    });
    
    
    
    
    
    
    