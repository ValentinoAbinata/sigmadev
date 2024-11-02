 // Add smooth scroll-pause behavior
    const banner = document.querySelector('.announcement-banner');
    const content = document.querySelector('.announcement-content');

    // Adjust animation duration based on content length
    const adjustAnimationDuration = () => {
      const contentWidth = content.offsetWidth;
      const duration = Math.max(20, contentWidth / 50); // Adjust speed based on content length
      content.style.animationDuration = `${duration}s`;
    };

    // Call on load and resize
    window.addEventListener('load', adjustAnimationDuration);
    window.addEventListener('resize', adjustAnimationDuration);