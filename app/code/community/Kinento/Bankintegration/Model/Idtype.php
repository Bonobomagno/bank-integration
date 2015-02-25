<?php
/**
 * Kinento Bank Integration
 * 
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 *
 * @category   Kinento
 * @package    Kinento_Bankintegration
 * @copyright  Copyright (c) 2009-2015 Kinento
 * @license    MIT license
 *
 */


class Kinento_Bankintegration_Model_Idtype {
	protected $_options;

	public function toOptionArray() {
		if ( !$this->_options ) {
			$this->getAllOptions();
		}
		return $this->_options;
	}

	public function getAllOptions() {
		if ( !$this->_options ) {
			$this->_options = array();
			$this->_options[] = array( 'value' => 'orderid' , 'label' => Mage::helper( 'bankintegration' )->__( 'Order ID' ) );
			$this->_options[] = array( 'value' => 'invoiceid' , 'label' => Mage::helper( 'bankintegration' )->__( 'Invoice ID' ) );
			$this->_options[] = array( 'value' => 'orderandinvoiceid' , 'label' => Mage::helper( 'bankintegration' )->__( 'Order and invoice ID' ) );
		}
		return $this->_options;
	}
}

?>