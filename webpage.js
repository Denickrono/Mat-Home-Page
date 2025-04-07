document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('logbut').addEventListener('mouseover', function () {
        this.style.backgroundColor = 'grey';
    });
    document.getElementById('logbut').addEventListener('mouseout', function () {
        this.style.backgroundColor = '';
    });

    document.getElementById('sinbut').addEventListener('mouseover', function () {
        this.style.backgroundColor = 'grey';
    });
    document.getElementById('sinbut').addEventListener('mouseout', function () {
        this.style.backgroundColor = '';
    });
     document.getElementById('bokbut').addEventListener('mouseover', function () {
        this.style.backgroundColor = 'grey';
    });
    document.getElementById('bokbut').addEventListener('mouseout', function () {
        this.style.backgroundColor = '';
    })
    document.getElementById('dasbut').addEventListener('mouseover', function () {
        this.style.backgroundColor = 'grey';
    });
    document.getElementById('dasbut').addEventListener('mouseout', function () {
        this.style.backgroundColor = '';
    });
});

document.addEventListener('DOMContentLoaded', function() {
    const dashboardBtn = document.getElementById('dashboard-btn');
    const dashboardMenu = document.getElementById('dashboard-menu');
    const aboutBtn = document.getElementById('about-btn');
    const servicesBtn = document.getElementById('services-btn');
    const contactsBtn = document.getElementById('contacts-btn');
    const helpBtn = document.getElementById('help-btn');
    
    const aboutSection = document.getElementById('about-section');
    const servicesSection = document.getElementById('services-section');
    const contactsSection = document.getElementById('contacts-section');
    const helpSection = document.getElementById('help-section');
    
    // Dashboard toggle
    dashboardBtn.addEventListener('click', function(e) {
        e.stopPropagation();
        dashboardMenu.style.display = dashboardMenu.style.display === 'block' ? 'none' : 'block';
    });
    
    // Hide dashboard when clicking outside
    document.addEventListener('click', function(e) {
        if (!dashboardMenu.contains(e.target) && e.target !== dashboardBtn) {
            dashboardMenu.style.display = 'none';
        }
    });
    
    // Dashboard menu items click events
    aboutBtn.addEventListener('click', function() {
        hideAllSections();
        aboutSection.style.display = 'block';
        dashboardMenu.style.display = 'none';
    });
    
    servicesBtn.addEventListener('click', function() {
        hideAllSections();
        servicesSection.style.display = 'block';
        dashboardMenu.style.display = 'none';
    });
    
    contactsBtn.addEventListener('click', function() {
        hideAllSections();
        contactsSection.style.display = 'block';
        dashboardMenu.style.display = 'none';
    });
    
    helpBtn.addEventListener('click', function() {
        hideAllSections();
        helpSection.style.display = 'block';
        dashboardMenu.style.display = 'none';
    });
    
    // Helper function to hide all sections
    function hideAllSections() {
        aboutSection.style.display = 'none';
        servicesSection.style.display = 'none';
        contactsSection.style.display = 'none';
        helpSection.style.display = 'none';
    }
});