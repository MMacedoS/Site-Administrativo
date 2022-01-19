
    <section>
    <div id="fh5co-counter" class="fh5co-counters">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center animate-box">
					<p></p>
					</div>
			</div>
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2">
					<div class="row">
						<div class="col-md-3 col-sm-6 col-xs-6 text-center">
							<span class="fh5co-counter js-counter" data-from="0" data-to="<?=count($this->membros)?>" data-speed="1000" data-refresh-interval="50"></span>
							<span class="fh5co-counter-label">Membros</span>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-6 text-center">
							<span class="fh5co-counter js-counter" data-from="0" data-to="<?=count($this->igrejas)?>" data-speed="1000" data-refresh-interval="50"></span>
							<span class="fh5co-counter-label">Ministerios</span>
						</div>
						<div class="clearfix visible-sm-block visible-xs-block"></div>
						<div class="col-md-3 col-sm-6 col-xs-6 text-center">
							<span class="fh5co-counter js-counter" data-from="0" data-to="<?=count($this->grupos)?>" data-speed="1000" data-refresh-interval="50"></span>
							<span class="fh5co-counter-label">Grupos</span>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-6 text-center">
							<span class="fh5co-counter js-counter" data-from="0" data-to="<?=count($this->celulas)?>" data-speed="1000" data-refresh-interval="50"></span>
							<span class="fh5co-counter-label">Celulas</span>
						</div>
					</div>
				</div>
			</div>
		</div>
    </section>