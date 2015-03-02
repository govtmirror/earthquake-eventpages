/* global chai, describe, it */
'use strict';

var expect = chai.expect,
    ImpactModule = require('impact/ImpactModule');


describe('ImpactModule test suite.', function () {
  describe('Constructor', function () {
    it('Can be defined.', function () {
      /* jshint -W030 */
      expect(ImpactModule).not.to.be.undefined;
      /* jshint +W030 */
    });

    it('Can be instantiated', function () {
      var c = new ImpactModule();
      expect(c).to.be.an.instanceof(ImpactModule);
    });
  });

  describe('destroy()', function () {
    it('has such a method', function () {
      /* jshint -W030 */
      expect((new ImpactModule()).destroy).to.not.be.undefined;
      /* jshint +W030 */
    });
  });

});
