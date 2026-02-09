    gsap.from(".ongoing-heading",{
      y:-200,
      opacity:0,
      duration:1,
      scrollTrigger: {
        trigger: ".ongoing-heading",
        start: "top 80%",
        end: "bottom 20%",
        toggleActions: "play none none reverse"
      }
    });
    gsap.from(".ongoing-img",{
      y:-200,
      opacity:0,
      duration:0.5,
      scrollTrigger: {
        trigger: ".ongoing-img",
        start: "top 80%",
        end: "bottom 20%",
        toggleActions: "play none none reverse"
      }
    });
    gsap.from(".project-card",{
      y:200,
      opacity:0,
      duration:1,
      scrollTrigger: {
        trigger: ".project-card",
        start: "top 80%",
        end: "bottom 20%",
        toggleActions: "play none none reverse"
      },
     stagger: 0.2
    });
    
      gsap.from(".dream-content",{
      y:-100,
      opacity:0,
      duration:1,
      scrollTrigger: {
        trigger: ".project-card",
        start: "top 80%",
        end: "bottom 20%",
        toggleActions: "play none none reverse"
      }
    });
    gsap.from(".dream-img",{
      y:100,
      opacity:0,
      duration:1,
      scrollTrigger: {
        trigger: ".dream",
        start: "top 80%",
        end: "bottom 20%",
        toggleActions: "play none none reverse"
      }
    });
    gsap.from(".choose-img",{
      y:-200,
      opacity:0,
      duration:1,
      scrollTrigger: {
        trigger: ".dream-img",
        start: "top 50%",
        end: "bottom 50%",
        toggleActions: "play none none none"
      }
    });
    gsap.from(".choose-content",{
      y:-200,
      opacity:0,
      duration:1,
      scrollTrigger: {
        trigger: ".dream-img",
        start: "top 100%",
        end: "bottom 20%",
        toggleActions: "play none none none"
      }
    });