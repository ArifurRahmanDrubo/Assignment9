@extends('layouts.app')


@section('portfoliocontent')


<section class="portfolio section" id="portfolio">
    <div class="container">
        <div class="row">
            <div class="section-title padd-15">
                <h2>Portfolio</h2>
            </div>
        </div>
        <div class="row">
            <div class="portfolio-fiter padd-15">
                <button type="button" class="active"  data-filter="all">All</button>
                <button type="button" class="" data-filter="Web Design">Web Design</button>
                <button type="button" class="" data-filter="Javascript">Javascript</button>
                <button type="button" class="" data-filter="Game">Game</button>
            </div>
            
        </div>
        <div class="row portfolio-items " id="project-container">
          <!--portfolio-item-->
          @foreach($portfolioProjects as $project)
          <div class="portfolio-item padd-15" data-catagory="{{ $project['catagory'] }}">
            <div class="portfolio-item-inner shadow-dark">
                <div class="portfolio-img">
                    <img src="{{ asset($project['image']) }}" alt="{{ $project['title'] }}">
                </div>
                <div class="portfolio-info">
                    <h4>{{ $project['title'] }}</h4>
                    <div class="icon"><a href="{{ $project['link'] }}" class="view-project" target="_blank"><i class="fa fa-link"></i></a></div>
                </div>
            </div>
        </div>
        
      @endforeach
          
      
   
          <!--portfolio-item end-->
          <!--portfolio-item-->
       
          <!--portfolio-item end-->
        </div>
        <button id="load-more" class="padd-15 btn">Load More</button>
  </div>
</section>

<script>
    let offset = 9; // Number of projects already loaded
    let selectedCategory = 'all'; // Default category
    const projects = @json($portfolioProjects);

    // Function to render projects based on category
    const renderProjects = (start, end, category) => {
        const container = document.getElementById('project-container');
        for (let i = start; i < end; i++) {
            const project = projects[i];
            if (category === 'all' || project['catagory'] === category) {
                const projectElement = document.createElement('div');
                projectElement.className = 'portfolio-item padd-15';
                projectElement.setAttribute('data-category', project['catagory']);
                projectElement.innerHTML = `
                    <div class="portfolio-item-inner shadow-dark">
                        <div class="portfolio-img">
                            <img src="${project['image']}" alt="${project['title']}">
                        </div>
                        <div class="portfolio-info">
                            <h4>${project['title']}</h4>
                            <div class="icon"><a href="${project['link']}" class="view-project" target="_blank"><i class="fa fa-link"></i></a></div>
                        </div>
                    </div>
                `;
                container.appendChild(projectElement);
            }
        }
    };

    // Function to load projects based on the selected category
    const loadProjects = () => {
        document.getElementById('project-container').innerHTML = ''; // Clear existing projects
        renderProjects(0, offset, selectedCategory);
        offset += 9;
    };

    // Initial load based on selected category
    loadProjects();

    document.querySelectorAll('.portfolio-fiter button').forEach(button => {
        button.addEventListener('click', function () {
            // Reset container and offset when a filter button is clicked
            document.getElementById('project-container').innerHTML = '';
            offset = 9;

            // Highlight the clicked button and unhighlight others
            document.querySelectorAll('.portfolio-fiter button').forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');

            // Get the data-filter attribute value
            selectedCategory = this.getAttribute('data-filter');

            // Render projects based on the selected category
            loadProjects();

            // Hide the "Load More" button if there are no more projects
            if (offset >= projects.length) {
                document.getElementById('load-more').style.display = 'none';
            } else {
                document.getElementById('load-more').style.display = 'block';
            }
        });
    });

    document.getElementById('load-more').addEventListener('click', function () {
        // Render the next set of projects based on the selected category
        renderProjects(offset, offset + 9, selectedCategory);

        offset += 9;

        // Hide the "Load More" button if there are no more projects
        if (offset >= projects.length) {
            document.getElementById('load-more').style.display = 'none';
        }
    });
</script>

@endsection