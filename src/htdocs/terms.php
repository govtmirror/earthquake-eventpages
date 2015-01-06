<?php
if (!isset($TEMPLATE)) {
  $TITLE = "Technical Terms used on Event Pages";
  $HEAD = '<link rel="stylesheet" href="terms.css"/>';
  include_once 'template.inc.php';
}
?>

<a id="magnitude"></a>
<h2>Magnitude</h2>

<p>
  Seismologists indicate the size of an earthquake in units of magnitude. There
  are many different ways that magnitude is measured from seismograms because
  each method only works over a limited range of magnitudes and with different
  types of seismometers. Some methods are based on body waves (which travel deep
  within the structure of the earth), some based on surface waves (which
  primarily travel along the uppermost layers of the earth), and some based on
  completely different methodologies. However, all of the methods are designed
  to agree well over the range of magnitudes where they are reliable.
  Preliminary magnitudes based on incomplete but available data are sometimes
  estimated and reported. For example, the Tsunami Centers will calculate a
  preliminary magnitude and location for an event as soon as sufficient data is
  available to make an estimate. In this case, time is of the essence in order
  to broadcast a warning if tsunami waves are likely to be generated by the
  event. Such preliminary magnitudes, which may be off by one-half magnitude
  unit or more, are sufficient for the purpose at hand, and are superseded by
  more exact estimates of magnitude as more data become available. Earthquake
  magnitude is a logarithmic measure of earthquake size. In simple terms, this
  means that at the same distance from the earthquake, the shaking will be 10
  times as large during a magnitude 5 earthquake as during a magnitude 4
  earthquake. The total amount of energy released by the earthquake, however,
  goes up by a factor of 32.
</p>

<h2>
  Magnitudes commonly used by seismic networks include:
</h2>

<table class="magnitudes">
  <thead>
    <tr>
      <th class="type">Magnitude type</th>
      <th class="mrange">Applicable magnitude range</th>
      <th class="drange">Distance range</th>
      <th class="comments">Comments</th>
    </tr>
  </thead>
  <tbody>
    <tr class="odd">
      <td>Duration (Md)</td>
      <td>&lt; 4</td>
      <td>0-400 km</td>
      <td>
        Based on the duration of shaking as measured by the time decay of the
        amplitude of the seismogram.  Often used to compute magnitude from
        seismograms with &ldquo;clipped&rdquo; waveforms due to limited dynamic
        recording range of analog instrumentation, which makes it impossible to
        measure peak amplitudes.
      </td>
    </tr>
    <tr class="even">
      <td>Local (ML)</td>
      <td>2-6</td>
      <td>0-400 km</td>
      <td>
        The original magnitude relationship defined by Richter and Gutenberg for
        local earthquakes in 1935. It is based on the maximum amplitude of a
        seismogram recorded on a Wood-Anderson torsion seismograph. Although
        these instruments are no longer widely in use, ML values are calculated
        using modern instrumentation with appropriate adjustments.
      </td>
    </tr>
    <tr class="odd">
      <td>Surface wave (Ms)</td>
      <td>5-8</td>
      <td>20-180 degrees</td>
      <td>
        A magnitude for distant earthquakes based on the amplitude of Rayleigh
        surface waves measured at a period near 20 sec.
      </td>
    </tr>
    <tr class="even">
      <td>Moment (Mw)</td>
      <td>&gt; 3.5</td>
      <td>all</td>
      <td>
        Based on the moment of the earthquake, which is equal to the rigidity of
        the earth times the average amount of slip on the fault times the amount
        of fault area that slipped.
      </td>
    </tr>
    <tr class="odd">
      <td>Energy (Me)</td>
      <td>&gt; 3.5</td>
      <td>all</td>
      <td>
        Based on the amount of recorded seismic energy radiated by the
        earthquake.
      </td>
    </tr>
    <tr class="even">
      <td>Moment (Mi)</td>
      <td>5-8</td>
      <td>all</td>
      <td>
        Based on the integral of the first few seconds of P wave on broadband
        instruments (Tsuboi method).
      </td>
    </tr>
    <tr class="odd">
      <td>Body (Mb)</td>
      <td>4-7</td>
      <td>16-100 degrees (only deep earthquakes)</td>
      <td>
        Based on the amplitude of P body-waves. This scale is most appropriate
        for deep-focus earthquakes.
      </td>
    </tr>
    <tr class="even">
      <td>Surface wave (MLg)</td>
      <td>5-8</td>
      <td>all</td>
      <td>
        A magnitude for distant earthquakes based on the amplitude of the Lg
        surface waves.
      </td>
    </tr>
  </tbody>
</table>

<a id="eventTime"></a>
<h2>Event Time</h2>

<p>
  We indicate the date and time when the earthquake initiates rupture, which is
  known as the "origin" time. Note that large earthquakes can continue rupturing
  for many 10's of seconds. We provide time in UTC (Coordinated Universal Time).
  Seismologists use UTC to avoid confusion caused by local time zones and
  daylight savings time. On the individual event pages, times are also provided
  for the time at the epicenter, and your local time based on the time your
  computer is set.
</p>

<a id="location"></a>
<h2>Location</h2>

<p>
  An earthquake begins to rupture at a hypocenter which is defined by a position
  on the surface of the earth (epicenter) and a depth below this point (focal
  depth). We provide the coordinates of the epicenter in units of latitude and
  longitude. The latitude is the number of degrees north (N) or south (S) of the
  equator and varies from 0 at the equator to 90 at the poles. The longitude is
  the number of degrees east (E) or west (W) of the prime meridian which runs
  through Greenwich, England. The longitude varies from 0 at Greenwich to 180
  and the E or W shows the direction from Greenwich. Coordinates are given in
  the
  <a href="http://earth-info.nga.mil/GandG/publications/tr8350.2/tr8350_2.html">
  WGS84</a> reference frame. The position uncertainty of the hypocenter location
  varies from about 100 m horizontally and 300 meters vertically for the best
  located events, those in the middle of densely spaced seismograph networks, to
  10s of kilometers for global events in many parts of the world.
</p>

<a id="depth"></a>
<h2>Depth</h2>

<p>
  The depth where the earthquake begins to rupture. This depth may be relative
  to mean sea-level or the average elevation of the seismic stations which
  provided arrival-time data for the earthquake location. The choice of
  reference depth is dependent on the method used to locate the earthquake.
  Sometimes when depth is poorly constrained by available seismic data, the
  location program will set the depth at a fixed value. For example, 33 km is
  often used as a default depth for earthquakes determined to be shallow, but
  whose depth is not satisfactorily determined by the data, whereas default
  depths of 5 or 10 km are often used in mid-continental areas and on mid-ocean
  ridges since earthquakes in these areas are usually shallower than 33 km.
</p>

<a id="nearbyCities"></a>
<h2>Nearby Cities</h2>

<p>
  We provide distances and directions from nearby geographical reference points
  to the earthquake. The reference points are towns, cities, and major
  geographic features derived from US Census data, such as from
  <a href="http://www.census.gov/geo/www/gazetteer/places2k.html">
  http://www.census.gov/geo/www/gazetteer/places2k.html</a>. International
  places were gathered from a specially created USGS catalog. Selected places
  were based on minimum population values that were specified for each
  particular region.
</p>

<p>
  We realize that these distances are uncertain both because of the errors
  inherent in locating earthquake (typically one or more kilometers) and because
  of the impossibility of describing the location of a city by a single
  longitude-latitude entry in a table. For places in the US, rather than
  rounding off distances to, say, the nearest 10 kilometers, we chose to trust
  the user's common sense in interpreting the accuracy of these distances. For
  places outside the US, distances are rounded depending on the
  <a href="#locationUncertainty">location uncertainty</a>. If the computed
  location is close to an operating quarry which is known to use explosives in
  its operations, we indicate that the event may be a quarry explosion. We try
  to always provide at least one widely recognized reference point in the list
  on the event page, even if the earthquake occurs in a remote location.
</p>

<a id="magnitudeUncertainty"></a>
<h2>Magnitude Uncertainty</h2>

<a id="locationUncertainty"></a>
<h2>Location Uncertainty</h2>

<p>
  The horizontal location error, in km, defined as the length of the largest
  projection of the three principal errors on a horizontal plane. The principal
  errors are the major axes of the error ellipsoid, and are mutually
  perpendicular. The horizontal and vertical uncertainties in an event's
  location varies from about 100 m horizontally and 300 meters vertically for
  the best located events, those in the middle of densely spaced seismograph
  networks, to 10s of kilometers for global events in many parts of the world.
  We assign an "unknown" value if the contributing seismic network does not
  supply the necessary information to generate uncertainty estimates.
</p>

<a id="depthUncertainty"></a>
<h2>Depth Uncertainty</h2>

<p>
  The depth error, in km, defined as the largest projection of the three
  principal errors on a vertical line.
</p>

<a id="azmithulGap"></a>
<h2>Azimuthal Gap</h2>

<p>
  The largest azimuthal gap between azimuthally adjacent stations (in degrees).
  In general, the smaller this number, the more reliable is the calculated
  horizontal position of the earthquake. Earthquake locations in which the
  azimuthal gap exceeds 180 degrees typically have large location and depth
  uncertainties.
</p>

<a id="nst"></a>
<h2>Number of Stations Used</h2>

<p>
  Number of seismic stations which reported P- and S-arrival times for this
  earthquake. This number may be larger than the Number of Phases Used if
  arrival times are rejected because the distance to a seismic station exceeds
  the maximum allowable distance or because the arrival-time observation is
  inconsistent with the solution.
</p>

<a id="nph"></a>
<h2>Number of Phases Used</h2>

<p>
  Number of P and S arrival-time observations used to compute the hypocenter
  location. Increased numbers of arrival-time observations generally result in
  improved earthquake locations.
</p>

<a id="dmin"></a>
<h2>Minimum Distance</h2>

<p>
  Horizontal distance from the epicenter to the nearest station (in km). In
  general, the smaller this number, the more reliable is the calculated depth of
  the earthquake.
</p>

<a id="rmss"></a>
<h2>Travel Time Residual</h2>

<p>
  The root-mean-square (RMS) travel time residual, in sec, using all weights.
  This parameter provides a measure of the fit of the observed arrival times to
  the predicted arrival times for this location. Smaller numbers reflect a
  better fit of the data. The value is dependent on the accuracy of the velocity
  model used to compute the earthquake location, the quality weights assigned to
  the arrival time data, and the procedure used to locate the earthquake.
</p>

<a id="reviewStatus"></a>
<h2>Review Status</h2>

<a id="eventID"></a>
<h2>Event ID</h2>

<p>
  A combination of a 2-letter
  <a href="http://www.iris.edu/stations/networks.txt">Seismic Network Code</a>
  and a number assigned by the contributing seismic network.
</p>

<a id="momentTensors"></a>
<h2>Moment Tensors</h2>

