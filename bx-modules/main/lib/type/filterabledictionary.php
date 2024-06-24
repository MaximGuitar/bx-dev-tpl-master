<?php
namespace Bitrix\Main\Type;

class FilterableDictionary
	extends Dictionary
{
	/**
	 * @var string
	 */
	protected $name;

	/**
	 * @var array
	 */
	protected $arRawValues = array();

	/**
	 * @var IDictionaryFilter[]
	 */
	protected $arFilters = array();

	/**
	 * Creates object.
	 *
	 * @param array $values
	 */
	
	/**
	* <p>Нестатический метод вызывается при создании экземпляра класса и позволяет в нем произвести при создании объекта какие-то действия.</p>
	*
	*
	* @param array $values  
	*
	* @return public 
	*
	* @static
	* @link http://dev.1c-bitrix.ru/api_d7/bitrix/main/type/filterabledictionary/__construct.php
	* @author Bitrix
	*/
	public function __construct(array $values, $name = null)
	{
		$this->values = $this->arRawValues = $values;
		$this->name = $name;
	}

	public function addFilter(IDictionaryFilter $filter)
	{
		$this->values = $filter->filterArray($this->values, $this->name);
		$this->arFilters[] = $filter;
	}

	/**
	 * Returns original value of any variable by its name. Null if variable is not set.
	 *
	 * @param string $name
	 * @return string | null
	 */
	
	/**
	* <p>Нестатический метод возвращает оригинальное значение любой переменной по её имени. Возвращает <code>0</code>, если переменная не существует.</p>
	*
	*
	* @param string $name  
	*
	* @return string 
	*
	* @static
	* @link http://dev.1c-bitrix.ru/api_d7/bitrix/main/type/filterabledictionary/getraw.php
	* @author Bitrix
	*/
	public function getRaw($name)
	{
		if (isset($this->arRawValues[$name]) || array_key_exists($name, $this->arRawValues))
			return $this->arRawValues[$name];

		return null;
	}

	/**
	 * Offset to set
	 */
	
	/**
	* <p>Нестатический метод. Установка по смещению.</p> <p>Без параметров</p> <a name="example"></a>
	*
	*
	* @return public 
	*
	* @static
	* @link http://dev.1c-bitrix.ru/api_d7/bitrix/main/type/filterabledictionary/offsetset.php
	* @author Bitrix
	*/
	public function offsetSet($offset, $value)
	{
		$this->values[$offset] = $this->arRawValues[$offset] = $value;
		foreach ($this->arFilters as $filter)
			$this->values[$offset] = $filter->filter($this->values[$offset], $this->name."[".$offset."]", $this->values);
	}

	/**
	 * Offset to unset
	 */
	
	/**
	* <p>Нестатический метод. Очистка по смещению.</p> <p>Без параметров</p> <a name="example"></a>
	*
	*
	* @return public 
	*
	* @static
	* @link http://dev.1c-bitrix.ru/api_d7/bitrix/main/type/filterabledictionary/offsetunset.php
	* @author Bitrix
	*/
	public function offsetUnset($offset)
	{
		unset($this->values[$offset]);
		unset($this->arRawValues[$offset]);
	}
}