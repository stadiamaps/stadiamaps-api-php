# # TzResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**tz_id** | **string** | The canonical time zone ID. In the event that multiple time zones could be returned, the first one from the Unicode CLDR timezone.xml is returned. |
**base_utc_offset** | **int** | The base offset, in seconds, from UTC that is normally in effect for this time zone. |
**dst_offset** | **int** | The special offset, in seconds, from UTC that is in effect for this time zone as of the queried timestamp (defaults to now). If no additional offsets are in effect, this value is zero. This typically reflects Daylight Saving Time, but may indicate other special offsets. To get the total offset in effect, add &#x60;dst_offset&#x60; and &#x60;utc_offset&#x60; together. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
